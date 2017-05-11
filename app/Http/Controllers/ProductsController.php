<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Shoppingcart;

class ProductsController extends Controller
{
    public function index(Request $request)
    {

        $user = User::where('id', 1)->first();
        if(!isset($user['id']))
          return Array( 'success'=> false);

        $shoppingcart = $user->shoppingcart;

        if(!isset($shoppingcart)){
            $products = Product::paginate(20);
            return $products;
        }
        else {
          $products = $shoppingcart->products;
          $ids = Array();

          foreach ($products as $key => $value) {
            $ids[$key] = $value['id'];
          }

          $items =  Product::whereNotIn('id', $ids )->get();
          return $items;
        }
    }
}
