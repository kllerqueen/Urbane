<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Picture;

class AdminController extends Controller
{

    public function getAllCategories() {
        $categories = Category::whereNotIn('category_name', ['Unisex'])->get();

        return $categories;
    }

    public function getAllItem() {

        $items = Item::all();

        return $items;
    }

    public function index(){
        $items = $this->getAllItem();
        $categories = $this->getAllCategories();

        return view('pages.adminPage', compact('items', 'categories'));
    }

    public function addItem(Request $request){

        $item = new Item;
        $item->category_id = Category::firstWhere('name', $request->categoryName)->id;
        $item->item_name = $request->input('item_name');
        $item->item_desc = $request->input('item_desc');
        $item->item_price = $request->input('item_price');
        $item->item_createTime = now();
        $item->save();

        return redirect();
    }

    public function deleteItem(Item $item){

        Picture::where('item_id', $item->id)->delete();
        $item->delete();
        return redirect()->back();
    }
}
