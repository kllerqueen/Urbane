<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function itemDetail($id) {

        $item = Item::where('id', $id)->get();

        return view('pages.itemDetail', compact('item'));
    }
}
