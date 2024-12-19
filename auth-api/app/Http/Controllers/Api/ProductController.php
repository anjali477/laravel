<?php

namespace App\Http\Controllers\Api;
use App\models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts(Product $products) {
        $products=Product::all();
        return $products;
}
}
