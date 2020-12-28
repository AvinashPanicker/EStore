<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('index');
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
    public function product_list()
    {
        return view('product_list');
    }
    public function single_blog()
    {
        return view('single-blog');
    }
    public function single_product()
    {
        return view('single-product');
    }
}
