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
      
        \DB::table('carts')
            ->updateOrInsert(
                [
                    'user_id' => auth()->id(), 
                    'item_id' => $itemId
                ],
                [
                    'qty' => \DB::raw('qty + 1'),
                    'created_at' => now(), 
                    'updated_at' => now()
                ]
            );

        return redirect()->back();
    }

    public function RemoveCart($item_id){
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

    public function CheckOutForm(){
        $user = $this->getUser();

        $lists = Cart::where('user_id', $user->id)->get();
        return view('pages.payment.CheckoutForm', compact('lists'));
    }
    
    public function updateQty($item_id){
        $operation = request('operation');
        $qtyChange = ($operation === 'increase') ? 1 : -1;

        if ($operation === 'decrease') {
            $currentQty = \DB::table('carts')
                ->where('user_id', auth()->id())
                ->where('item_id', $item_id)
                ->value('qty');

            // Memastikan qty tidak berkurang di bawah 0
            if ($currentQty <= 0) {
                return redirect()->back()->with('error', 'Qty already at minimum');
            }
        }

        \DB::table('carts')
        ->where('user_id', auth()->id())
        ->where('item_id', $item_id)
        ->update(['qty' => \DB::raw('qty + ' . $qtyChange)]);

        return redirect()->back();
    }

}
