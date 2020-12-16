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
    public function login(Request $request){
        //dd($request);
        $page_title="New login Page";
        return view('frontend.login',['page_title'=>$page_title]);
    }
}

