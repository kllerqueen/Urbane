<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Item;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function getReccomendedItem() {

        $time = now()->subMonths(3);

        $latestItem = Item::where('created_at', '>=', $time)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->orderBy('item_price', 'asc')
            ->get();

        return $latestItem;
    }

    public function itemDetail(Request $request, $id) {

        $item = Item::where('id', $id)->first();
        $reccomended = $this->getReccomendedItem();
        $fav = Favorite::where('user_id', $request->user()->id)->where('item_id', $id)->first();

        return view('pages.product.productDetail', compact('item', 'reccomended', 'fav'));
    }
}
