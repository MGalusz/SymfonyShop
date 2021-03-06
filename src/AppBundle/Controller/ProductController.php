<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Product controller.
 *
 * @Route("product")
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     * @Route("/", name="product_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();
        return $this->render('@App/product/index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * Creates a new product entity.
     *
     * @Route("/new", name="product_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('AppBundle\Form\ProductType', $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush($product);
            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }
        return $this->render('@App/product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/addToProduct/{id}",requirements={"id"="\d+"}, name="addToCart")
     *
     */
    public function addProductToCartAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();
        $this->addToCart($request->getSession(), $id);
        return $this->render('@App/product/index.html.twig', array(
            'products' => $products,
            'session' => $request->getSession()
        ));
    }

    /**
     * @Route("/showCart", name="showCart")
     *
     */
    public function showCart(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $productIds = $request->getSession()->get('cart', []);
        $productsInCart = [];



        if (count($productIds) > 0) {
            $productsInCart = $em->getRepository('AppBundle:Product')->getProductsByIdArray($productIds);
            $productsSum = $this->getSum($productsInCart);
            return $this->render('@App/cart/index.html.twig', array(
                'products' => $productsInCart,
                'productsSum' => $productsSum,
            ));
        }
        return $this->render('@App/cart/empty.html.twig' );
    }

    /**
     * Finds and displays a product entity.
     *
     * @Route("/{id}", name="product_show")
     * @Method("GET")
     *
     */
    public function showAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        return $this->render('@App/product/show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
            'session' => $request->getSession()
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     * @Route("/{id}/edit",requirements={"id"="\d+"}, name="product_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('AppBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('product_edit', array('id' => $product->getId()));
        }
        return $this->render('@App/product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     * @Route("/{id}",requirements={"id"="\d+"}, name="product_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush($product);
        }
        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    private function addToCart($session, $id)
    {
        $myCartProducts = $session->get('cart', []);
        $myCartProducts[] = $id;
        $session->set('cart', $myCartProducts);
        $session->getFlashBag()->add('notice', 'Dodano do koszyka');
    }

    public function getSum($products)
    {

        $sum = 0;

        foreach ($products as $product) {
            $sum += $product->getPrice();
        }

        return $sum;

    }

}