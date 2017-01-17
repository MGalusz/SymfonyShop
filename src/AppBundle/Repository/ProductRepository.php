<?php

namespace AppBundle\Repository;
use Symfony\Component\HttpFoundation\Request;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    public function addToCart(Request $request ,$id){
        $session = $request->getSession();
        $session->set('cart', $id);
       $session->getFlashBag()->add('notice', 'Dodano do koszyka');

    }

    public function getFromCart(Request $request){
        $session = $request->getSession();
        $value = $session->get('cart');

        if (!isset($value)) {
            return new Response('Twoj Koszyk jest pusty');
        }

        return new Response($value);


    }
}
