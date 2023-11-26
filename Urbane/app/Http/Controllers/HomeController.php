<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUser() {
        $user = auth()->user();

        return $user;
    }

    public function getAllCategories() {
        $categories = Category::whereNotIn('category_name', ['Unisex'])->get();

        return $categories;
    }

    public function getNewArrival() {

        $time = now()->subMonths(3);

        $latestItem = Item::where('item_createTime', '>=', $time)
            ->orderBy('item_createTime', 'desc')
            ->get();

        return $latestItem;
    }

    public function getReccomendedItem() {

        $time = now()->subMonths(3);

        $latestItem = Item::where('item_createTime', '>=', $time)
            ->orderBy('item_createTime', 'desc')
            ->take(8)
            ->get();

        return $latestItem;
    }


    public function showHome() {

        $user = $this->getUser();
        $categories = $this->getAllCategories();
        $recommended = $this->getReccomendedItem();

        return view('pages.home', compact('user', 'categories', 'recommended'));

    }
}
