<?php 

require_once __DIR__ . '/../models/Products.php';

class MenuController {

    private $productModel;

    public function __construct()
    {
        $this->productModel = new Products();
    }

}