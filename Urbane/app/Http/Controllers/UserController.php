<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(Request $request){
        $user = session('user');

        return view('pages.home',[
            "user" => $user
        ]);
    }

    public function register(Request $request){
        // return $request->all(); liat request json
        $request->validate([
            'username' => ['required', 'min:5', 'max:25','unique:users'],
            'email' => 'required|email|unique:users|email:dns',
            'password' => 'required|min:5|max:25',
            'phoneNumber' => 'required|min:8|max:13',
            'con-pass' => 'required_with:password|same:password'
        ]);

        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->security = '';
        $user->save();

        return redirect('login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
            if(auth()->user()->role == 'admin'){

                return redirect()->route('adminPage', 'All');
            }
            else if(auth()->user()->role == 'courier'){
                return redirect()->route('courierPage');
            }
            else{
                return redirect()->route('homePage');
            }
        }

        return back()->with('error', 'User Not Found, Login Failed!');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginPage');
    }

    public function viewAllTransaction(){
        $user = auth()->user();

        $completeTransactions = DB::table('transaction_headers')
        ->join('transaction_details', 'transaction_headers.id', '=', 'transaction_details.transaction_id')
        ->join('items', 'transaction_details.item_id', '=', 'items.id')
        ->join('pictures', function ($join) {
            $join->on('items.id', '=', 'pictures.item_id')
                ->whereRaw('pictures.id = (SELECT MIN(id) FROM pictures WHERE item_id = items.id)');
        })
        ->select(
            'transaction_headers.*',
            'transaction_details.*',
            'items.item_name',
            'pictures.picture_url'
        )
        ->where('transaction_headers.customer_id', $user->id)
        ->get();

        $onProcessOrders = DB::table('orders')
            ->join('order_details', 'orders.id','=','order_details.order_id')
            ->join('items', 'order_details.item_id','=','items.id')
            ->join('pictures', function ($join) {
                $join->on('items.id', '=', 'pictures.item_id')
                    ->whereRaw('pictures.id = (SELECT MIN(id) FROM pictures WHERE item_id = items.id)');
            })
            ->select('orders.*','order_details.*', 'items.item_name', 'pictures.picture_url')
            ->where('customer_id', $user->id)
            ->where('status', 'OnProcess')
            ->get();

        $failedOrders = DB::table('orders')
            ->join('order_details', 'orders.id','=','order_details.order_id')
            ->join('items', 'order_details.item_id','=','items.id')
            ->join('pictures', function ($join) {
                $join->on('items.id', '=', 'pictures.item_id')
                    ->whereRaw('pictures.id = (SELECT MIN(id) FROM pictures WHERE item_id = items.id)');
            })
            ->select('orders.*','order_details.*', 'items.item_name', 'pictures.picture_url')
            ->where('customer_id', $user->id)
            ->where('status', 'Failed')
            ->get();

        return view('pages.profile.userProfile', compact('completeTransactions', 'onProcessOrders', 'failedOrders'));
    }

    public function updateProfile(Request $request){
        $user = User::where('id', $request->user->id)->first();

        $request->validate([
            'username' => ['required', 'min:5', 'max:25','unique:users'],
            'email' => 'required|email|unique:users|email:dns',
            'password' => 'required|min:5|max:25',
        ]);
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect()->back();
    }
}
