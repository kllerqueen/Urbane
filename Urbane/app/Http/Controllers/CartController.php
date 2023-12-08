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
      
        $cart = Cart::UpdateOrCreate(
            ['user_id' => auth()->id(), 'item_id' => $itemId],
            ['qty' => \DB::raw('qty + 1')]
        );
        
        return redirect()->back();
    }

    public function RemoveCart($item_id){
        
        // $cart = Cart::where('user_id', auth()->id())->where('item_id',$item_id)->first();

        // dump($cart);
        // $cart->delete();
        $user_id = auth()->id();
        \DB::table('carts')
        ->where('user_id', $user_id)
        ->where('item_id', $item_id)
        ->delete();
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
