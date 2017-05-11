<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Product;

use App\Shoppingcart;

class ShoppingcartsController extends Controller
{
    public function index(Request $request)
    {
        // $user = Auth::user();

        $user = User::where('id', 1)->first();

        if(!isset($user['id']))
          return Array( 'success'=> false);

        $shoppingcart = $user->shoppingcart;

        if(!isset($shoppingcart))
          return Array();

        $products = $shoppingcart->products;

        return $products;
    }

    public function store(Request $request)
    {
      $id = $request->input('product_id');
      $quantity = $request->input('quantity');

      if(!isset($id) || !isset($quantity)){
        return Array('success' => false);
      }

      $product = Product::where('id', $id)->first();

      if($product['stock'] < $quantity){
        return Array('success2' => false, 'message' => 'not enougth in existence');
      }

      $user = User::where('id', 1)->first();
      $shoppingcart = $user->shoppingcart;

      $newStock = $product['stock'] - $quantity;

      if(!isset($shoppingcart)){
        $shoppingcart = $user->shoppingcart()->create([]);
        $shoppingcart->products()->attach($product);
        $product['stock'] = $newStock;
        $product->save();
        return Array('success' => true);
      }
      else{
        $shoppingcart->products()->attach($product);
        $product['stock'] = $newStock;
        $product->save();
        return Array('success' => true);
      }
    }
}
