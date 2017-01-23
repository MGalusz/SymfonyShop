<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Purchase controller.
 *
 * @Route("purchase")
 */
class PurchaseController extends Controller
{
    /**
     * Lists all purchase entities.
     *
     * @Route("/", name="purchase_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchases = $em->getRepository('AppBundle:Purchase')->findAll();


        return $this->render('App/purchase/index.html.twig', array(
            'purchases' => $purchases,
        ));

    }



    /**
     * Creates a new purchase entity.
     *
     * @Route("/perchaseNew/{sum},", name="purchase_new2")
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request, $sum)
    {


        $em = $this->getDoctrine()->getManager();
        $productIds = $request->getSession()->get('cart', []);
        $productsInCart = [];

        if (count($productIds) > 0) {
            $productsInCart = $em->getRepository('AppBundle:Product')->getProductsByIdArray($productIds);

        }
        $purchase = new Purchase();
        $purchase->setStatus('zaplacono');


        foreach ($productsInCart as $product) {
            var_dump($product);
            $purchase->addProduct($product);
            $em->persist($product);
        }

        $purchase->setSum((int)$sum);
        $purchase->setUser($this->get('security.token_storage')->getToken()->getUser());

        $em->persist($purchase);

        $em->flush($purchase);

        return $this->redirectToRoute('purchase_show', array('id' => $purchase->getId()));


    }




    /**
     * Finds and displays a purchase entity.
     *
     * @Route("/show/{id}", name="purchase_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $purchase = $em->getRepository('AppBundle:Purchase')->findOneById($id);
        $deleteForm = $this->createDeleteForm($purchase);

        return $this->render('@App/purchase/show.html.twig', array(
            'purchase' => $purchase,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing purchase entity.
     *
     * @Route("/{id}/edit", name="purchase_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);
        $editForm = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('purchase_edit', array('id' => $purchase->getId()));
        }

        return $this->render('App/purchase/edit.html.twig', array(
            'purchase' => $purchase,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a purchase entity.
     *
     * @Route("/{id}", name="purchase_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Purchase $purchase)
    {
        $form = $this->createDeleteForm($purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($purchase);
            $em->flush($purchase);
        }

        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Creates a form to delete a purchase entity.
     *
     * @param Purchase $purchase The purchase entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Purchase $purchase)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchase_delete', array('id' => $purchase->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
