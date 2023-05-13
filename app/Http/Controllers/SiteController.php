<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function catalogue(){
        return view('catalogue');
    }

    public function promotion(){
        return view('promo');
    }

    public function form(Request $request){
        return view('promo', ['data' => $request]);
    }
}