<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;



class StoreController extends Controller
{
    public function index()
    {
        $pro=Product::all();
        return view('index',compact('pro'));
    }
    public function blog()
    {
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }
    public function cart()
    {
        return view('cart');
    }
    public function Catagori()
    {
        return view('Catagori');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function contact()
    {
        return view('contact');
    }
    public function elements()
    {
        return view('elements');
    }
    public function login()
    {
        return view('login');
    }
    public function single_blog()
    {
        return view('single-blog');
    }
    public function single_product()
    {
        return view('single-product');
    }
    public function reg()
    {
        return view('register');
    }
    public function checklog(Request $request)
    {
        if (Auth::attempt(['email' => $request->email ,'password' => $request->password])){
            
           return redirect('/');
        }
        return redirect('/login');
    }
    public function checkreg(Request $request)
    {
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        $user->save();
        return view('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
