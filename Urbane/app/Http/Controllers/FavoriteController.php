<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function getUser() {
        $user = auth()->user();

        return $user;
    }

    public function wishlist() {
        $user = $this->getUser();

        $lists = Favorite::where('user_id', $user->id)->get();

        return view('pages.user.favourite', compact('lists'));
    }

    public function addToWishlist(Request $request, $id) {

        $fav = new Favorite();
        $fav->user_id = $request->user()->id;
        $fav->item_id = $id;
        $fav->save();

        return redirect()->back();

    }
}
