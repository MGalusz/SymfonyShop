<?php

namespace AppBundle\Model;


use AppBundle\Repository\ProductRepository;

class ProductModel
{
    private $entityManager;
    private $productRepository;

    public function __construct(EntityManager $entityManager, ProductRepository $productRepository )
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }

    public function save(ProductRepository $product){
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }

    public function getAllProduct(){
        return $this->productRepository->findAll();
    }

    public function addToCard()
}