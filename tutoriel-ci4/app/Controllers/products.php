<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function index()
    {
       // echo "Products";
       //$productModel = new ItemModel();
       $productModel = new \App\Models\ItemModel();
       $products = $productModel->findAll();
       var_dump($products);
    }
}
  