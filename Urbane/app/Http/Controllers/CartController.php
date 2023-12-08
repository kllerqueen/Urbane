<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($itemId){
        $item = Item::find($itemId);

        if(!$item){
            return redurect()->back()->with('error', 'Product Not Found');
        }
      
        $cart = Cart::firstOrNew(
            ['user_id' => auth()->id(), 'item_id' => $itemId],
            ['qty' => \DB::raw('qty + 1')]
        );
        
        return redirect()->back();
    }

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
