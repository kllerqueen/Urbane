<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AdminController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('pages.adminPage', ['items' => $items]);
    }
}
