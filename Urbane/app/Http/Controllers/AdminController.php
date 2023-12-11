<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Order;
use App\Models\Picture;
use App\Models\ProductHistory;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getUser() {
        $user = auth()->user();

        return $user;
    }

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
            'category_name' => 'required|string|in:Man,Woman,Unisex,Accessory',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = new Item;
        $item->category_id = Category::firstWhere('category_name', $request->category_name)->id;
        $item->item_name = $request->input('item_name');
        $item->item_desc = $request->input('item_desc');
        $item->item_price = $request->input('item_price');
        $item->qty = $request->input('qty');
        $item->save();

        $notif = new Notification;
        $notif->user_id = auth()->id();
        $notif->title = "New Product!";
        $notif->desc = "Urbane just lauch new item : $item->item_name, Go Check out now!";
        $notif->type = "NewProduct";
        $notif->save();

        if($request->hasFile('image')){
            foreach($request->file('image') as $image){
                $imagePath = $image->store('item', 'public');
                $item->pictures()->create([
                    'picture_url' => $imagePath
                ]);
            }
        }

        ProductHistory::create([
            'admin_name' => $request->user()->username,
            'action' => 'Add Product',
            'datetime' => $item->created_at
        ]);

        return redirect()->route('adminPage', 'All');
    }

    public function deleteItem(Request $request, Item $item){

        $itemPictures = Picture::where('item_id', $item->id)->get();

        foreach($itemPictures as $pict) {
            Storage::disk('public')->delete($pict->picture_url);

        }

        Picture::where('item_id', $item->id)->delete();
        $item->delete();

        ProductHistory::create([
            'admin_name' => $request->user()->username,
            'action' => 'Delete Product',
            'datetime' => now()
        ]);

        return redirect()->back();
    }

    public function adminProfile() {

        $admin = $this->getUser();

        return view('pages.admin.adminProfile', compact('admin'));
    }

    public function updatePage(Request $request, $id) {
        $admin = User::where('id', $request->user()->id)->first();
        $item = Item::where('id', $id)->first();

        return view('pages.admin.adminEditProduct', compact('admin', 'item'));
    }

    public function editItem(Request $request) {

        $request->validate([
            'item_name' => 'required|string',
            'item_desc' => 'required|string',
            'item_price' => 'required|numeric',
            'qty' => 'required|integer',
            'category_name' => 'required|string|in:Man,Woman,Unisex,Accessory',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $itemId = $request->id;
        $itemName = $request->input('item_name');
        $categoryId = Category::firstWhere('category_name', $request->category_name)->id;
        $itemName = $request->input('item_name');
        $itemDesc = $request->input('item_desc');
        $itemPrice = $request->input('item_price');
        $itemQty = $request->input('qty');

        $item = Item::findOrFail($itemId);

        $item->item_name = $itemName;
        $item->category_id = $categoryId;
        $item->item_desc = $itemDesc;
        $item->item_price = $itemPrice;
        $item->qty = $itemQty;

        $item->save();

        ProductHistory::create([
            'admin_name' => $request->user()->username,
            'action' => 'Update Product',
            'datetime' => $item->updated_at
        ]);

        return redirect()->route('adminPage', 'All');
    }

    public function showChart() {

        $completed = Order::where('status', 'Complete')->count();
        $failed = Order::where('status', 'Failed')->count();
        $process = Order::where('status', 'OnProcess')->count();
        $products = Item::count();
        $users = User::where('role', 'customer')->count();

        $history = ProductHistory::latest()->get();

        return view('pages.admin.adminInfo', compact('completed', 'failed', 'process', 'products', 'users', 'history'));

    }
}
