<?php 

require_once '../models/Products.php';

class MenuController {

    private $productModel;

    public function __construct()
    {
        $this->productModel = new Products();
    }

}