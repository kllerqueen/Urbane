<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function getUser() {
        $user = auth()->user();

        return $user;
    }

    public function getAllCategories() {
        $categories = Category::whereNotIn('category_name', ['Unisex'])->get();

        return $categories;
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

        $latestItem = Item::where('item_createTime', '>=', $time)
            ->orderBy('item_createTime', 'desc')
            ->get();

        return $latestItem;
    }

    public function getAllItem() {

        $items = Item::all();

        return $items;
    }

}
