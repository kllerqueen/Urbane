<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //

    public function register(Request $request){
        // dd($request);
        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->security = ''; 
        $user->save();

        return redirect('/login');
    }
    
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // localStorage.setItem('user', JSON.stringify(user));
            return redirect("/home/{$user->id}");
        } else {
            // alert error msg -> user tidak ditemukan (sementara)
            Session::flash('error', 'User not found or incorrect password');
            return redirect('/login');
        }
    }
}
