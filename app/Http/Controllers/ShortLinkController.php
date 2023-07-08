<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ShortLink; 
use Illuminate\Support\Str;
class ShortLinkController extends Controller
{
    public function register(){
        return view('register');
    }
    public function register_store(Request $req){
        $req->validate([  
            'name' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'required'
         ]);
        $store=new User();
        $store->name=$req->name;
        $store->email=$req->email;
        $store->password =Hash::make($req->password);
        $store->save();
        return redirect('/');
    }
    public function login(){
        return view('login');
    }
    public function login_user(Request $request)
    {
        $request->validate([  
            'email' => 'required|email' ,
            'password' => 'required' 
         ]);
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    public function login_out(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
     public function logout(Request $request)
    {
        Auth::logout();
        session::flush();
        return redirect('/');
    }

    public function dashboard(){
        $urlCount = ShortLink::count();
        return view('dashboard',compact('urlCount'));
    }
    public function urlshortner(){
        $shortLink= ShortLink::latest()->get(); 
        return view('urlshortner',compact('shortLink'));
    }
    public function url_store(Request $req){
        $req->validate([  
            'link' => 'required|url'  
         ]);
        $store=new ShortLink();
        $store->link = $req->input('link');
        $store->code = Str::random(6);
        $store->save();
        return redirect('urlshortner');
    }
    public function shortenLink($code)  
    {  
        $find = ShortLink::where('code', $code)->first();  
        return redirect($find->link);  
    }  
}
