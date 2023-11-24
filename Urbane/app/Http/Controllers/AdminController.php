<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Picture;

class AdminController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('pages.adminPage', compact('items'));
    }
    public function addItem(Request $request){

        $item = new Item;
        $item->category_id = Category::firstWhere('name', $request->categoryName)->id;
        $item->item_name = $request->input('item_name');
        $item->item_desc = $request->input('item_desc');
        $item->item_price = $request->input('item_price');
        $item->item_createTime = now();
        $item->save();

        return redirect("/add-item");
    }
    public function deleteItem(Item $item){

        Picture::where('item_id', $item->id)->delete();
        $item->delete();
        return redirect()->back();
    }
}
