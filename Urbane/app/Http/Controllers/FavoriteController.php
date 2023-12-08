<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function wishlist(Request $request) {

        $lists = Favorite::where('user_id', $request->user()->id)->get();

        return view('pages.user.wishlist', compact('lists'));
    }

    public function toggleWishlist(Request $request, $id) {

        $uId = $request->user()->id;

        $fav = Favorite::where('user_id', $uId)->where('item_id', $id)->first();

        if($fav) {
            $fav->delete();
        } else {
            Favorite::create([
                'user_id' => $uId,
                'item_id' => $id,
            ]);
        }

        return redirect()->back();

    }

}
