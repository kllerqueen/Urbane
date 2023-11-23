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
            'email' => 'required|email|unique:users',
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

        return redirect('/login');
    }
    
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(auth()->user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }

            return redirect()->intended('/home');
        }

        return back()->with('error', 'login failed!');

        // $email = $request->input('email');
        // $password = $request->input('password');

        // $user = User::where('email', $email)->first();

        // if ($user && Hash::check($password, $user->password)) {
        //     // localStorage.setItem('user', JSON.stringify(user));
        //     Session::put('user', $user);
        //     return redirect("/home");
        // } else {
        //     // alert error msg -> user tidak ditemukan (sementara)
        //     Session::flash('error', 'User not found or incorrect password');
        //     return redirect('/login');
        // }
    }

    

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/home");
    }
}
