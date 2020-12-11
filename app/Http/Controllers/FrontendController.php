<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){
        return view('frontend.index');
    }
    public function register(){
        return view('frontend.register');
    }
    public function login(){
        return view('frontend.login');
    }
}

