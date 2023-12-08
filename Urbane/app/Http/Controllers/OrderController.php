<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;

class OrderController extends Controller
{
    
    public function addNewOrder(Request $request){
      
        $request->validate([
            'first_name' => ['required','min:3', 'max:12'],
            'last_name' => 'required|min:5|max:15',
            'address' => 'required|min:8|max:250',
            'postal' => 'required|numeric',
            'phone' => 'required|numeric',
            'notes' => 'required'
        ]);
       
        $order = new Order;
        $order->customer_id = auth()->id();
        $order->address = $request->input('address');
        $order->postal_Code = $request->input('postal');
        $order->status = "OnProcess";
        $order->name = $request->input('first_name') . ' ' . $request->input('last_name');
        $order->phone = $request->input('phone');
        $order->notes = $request->input('notes');
        $order->paymentMethod = "COD";
        $order->total_price = session()->pull('total');
        $order->save();
        
        $listItem = Cart::where('user_id',auth()->id())->get();

        foreach ($listItem as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'item_id' => $item->item_id, 
                'qty' => $item->qty
            ]);
        }

        Cart::where('user_id',auth()->id())->delete();
        return redirect()->route('homePage');
    }
}
