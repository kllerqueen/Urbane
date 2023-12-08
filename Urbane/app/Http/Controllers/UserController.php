<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function index(Request $request){
        $user = session('user');
        // @dd($user);
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

        // dd("berhasil weh");
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

        // @dd("asd");


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

}
