<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;

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

        $request->validate([
            'item_name' => 'required|string',
            'item_desc' => 'required|string',
            'item_price' => 'required|numeric',
            'qty' => 'required|integer',
            'categoryName' => 'required|string',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = new Item;
        $item->category_id = Category::firstWhere('category_name', $request->categoryName)->id;
        $item->item_name = $request->input('item_name');
        $item->item_desc = $request->input('item_desc');
        $item->item_price = $request->input('item_price');
        $item->qty = $request->input('qty');
        $item->save();

        $maxImages = 4;

        for($i = 1; $i <= $maxImages; $i++) {
            $imageName = "image{$i}";

            if ($request->hasFile($imageName)) {
                $imagePath = $request->file($imageName)->store('assets/item', 'public');

                // Save image data in the ItemPicture model
                $item->pictures()->create([
                    'picture_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('/admin/dashboard/All');
    }

    public function deleteItem(Item $item){

        $itemPictures = Picture::where('item_id', $item->id)->get();

        foreach($itemPictures as $pict) {
            $imagePath = 'assets/item' . $pict->picture_url;

            Storage::disk('public')->delete($imagePath);
        }

        Picture::where('item_id', $item->id)->delete();
        $item->delete();
        return redirect()->back();
    }
}
