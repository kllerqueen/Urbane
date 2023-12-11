<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\TransactionHeader;
use App\Models\TransactionDetail;
use App\Models\OrderDetail;
use App\Models\Item;
use App\Models\Notification;

class CourierController extends Controller
{
    public function getAllOrder(){
        $listOrderComplete = TransactionHeader::all();
        // dd($listOrderComplete);
        $listOrderUnComplete =  Order::whereIn('status', ['OnProcess', 'Failed'])->get();

        return view('pages.courier.courierPage', compact('listOrderComplete', 'listOrderUnComplete'));
    }

    public function updateStatusOrder(Request $request, $order_id){
        $order = Order::findOrFail($order_id);
        $status = $request->input('status_' . $order_id);
        if($status === "Complete"){
            $th = new TransactionHeader;
            $th->customer_id = $order->customer_id;
            $th->address = $order->address;
            $th->postal_Code = $order->postal_Code;
            $th->phone = $order->phone;
            $th->name = $order->name;
            $th->notes = $order->notes;
            $th->paymentMethod = $order->paymentMethod;;
            $th->total_price = $order->total_price;
            $th->save();
            
            
            $notif = new Notification;
            $notif->user_id = $order->customer_id;
            $notif->title = "Transaction Successful!";
            $notif->desc = "Your Transaction with ID $th->id has successful. Tap to see you're product!" ;
            $notif->type = "Transaction";
            $notif->save();
            
            $listItem = OrderDetail::where('order_id', $order_id)->get();

            foreach ($listItem as $item) {
                TransactionDetail::create([
                    'transaction_id' => $th->id,
                    'item_id' => $item->item_id, 
                    'qty' => $item->qty,
                    'size' => $item->size,
                    'color' => $item->color
                ]);
                $itemModel = Item::find($item->item_id); 
                if ($itemModel) {
                    $itemModel->decrement('qty', $item->qty);
                }
            }
            
            Order::where('id',$order_id)->delete();
        }else{
            $order->update(['status' => $status]);

            $notif = new Notification;
            $notif->user_id = $order->customer_id;
            $notif->title = "Transaction $status!";
            $notif->desc = "Your Transaction with ID $order->id is $status. Tap to see more info here!" ;
            $notif->type = "Transaction";
            $notif->save();
        }
        return redirect()->route('courierPage');
    }
}
