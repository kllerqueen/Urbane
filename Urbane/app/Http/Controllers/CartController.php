<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getUser() {
        $user = auth()->user();

        return $user;
    }

    public function cartItem() {
        $user = $this->getUser();

        $lists = Cart::where('user_id', $user->id)->get();

        return view('pages.user.cart', compact('lists'));
    }
}
