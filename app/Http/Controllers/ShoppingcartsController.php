<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shoppingcart;

class ShoppingcartsController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $shoppingcart = $user->shoppingcart;

    }
}
