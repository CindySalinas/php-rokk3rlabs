<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(20);
        return $products;
    }
}
