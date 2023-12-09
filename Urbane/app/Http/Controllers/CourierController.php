<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CourierController extends Controller
{
    public function getAllOrder(){
        $listOrderComplete = Order::where('status', 'Complete')->get();
        $listOrderUnComplete =  Order::whereIn('status', ['OnProcess', 'Failed'])->get();

        return view('pages.courier.courierPage', compact('listOrderComplete', 'listOrderUnComplete'));
    }

    public function updateStatusOrder(Request $request, $order_id){
        $order = Order::findOrFail($order_id);
        $order->update(['status' => $request->input('status')]);
        
        return redirect()->route('courierPage');
    }
}
