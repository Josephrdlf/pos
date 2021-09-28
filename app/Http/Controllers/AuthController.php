<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function routelogin (){
        return view('login');
    }

    public function routeregister (){
        return view('register');
    }

    public function routehome (){
        return view('home');
    }

    public function routeemployee(){
        return view('employee');
    }

    public function routeproduct(){
        return view('product');
    }

    public function routecart(){
        return view('cart');
    }

    public function routememberhome(){
        return view('home');
    }

    public function routememberproduct(){
        return view('product');
    }

    public function routecashierhome(){
        return view('home');
    }

    public function routecashiercart(){
        return view('cart');
    }

    public function routeadminhome(){
        return view('home');
    }

    public function routeadminuser(){
        return view('employee');
    }

    public function routeincome(){
        return view('income');
    }

    public function routediscount(){
        return view('discount');
    }

    public function routereport(){
        return view('report');
    }
}
