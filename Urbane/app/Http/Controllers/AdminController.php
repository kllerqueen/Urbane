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

    public function getItemByCategory($categoryId) {

        if($categoryId == 1 || $categoryId == 2) {
            $categoryItems = Item::where('category_id', $categoryId)
                ->orWhere('category_id', 3)
                ->get();
        } else {
            $categoryItems = Item::where('category_id', $categoryId)->get();
        }

        return $categoryItems;
    }

    public function getNewArrival() {

        $time = now()->subMonths(3);

        $latestItem = Item::where('created_at', '>=', $time)
            ->orderBy('created_at', 'desc')
            ->get();

        return $latestItem;
    }

    public function index($category_name){

        $category_name = ucfirst(strtolower($category_name));

        if($category_name == "All") {
            $items = $this->getAllItem();

        } else if($category_name == "New") {
            $items = $this->getNewArrival();

        } else {
            $categoryId = Category::where('category_name', $category_name)->pluck('id')->first();

            $items = $this->getItemByCategory($categoryId);
        }

        $categories = $this->getAllCategories();

        return view('pages.admin.adminPage', compact('items', 'categories'));
    }

    public function addItem(Request $request){

        $item = new Item;
        $item->category_id = Category::firstWhere('name', $request->categoryName)->id;
        $item->item_name = $request->input('item_name');
        $item->item_desc = $request->input('item_desc');
        $item->item_price = $request->input('item_price');
        $item->item_createTime = now();
        $item->save();

        return redirect()->route('/admin/dashboard/All');
    }

    public function deleteItem(Item $item){

        Picture::where('item_id', $item->id)->delete();
        $item->delete();
        return redirect()->back();
    }
}
