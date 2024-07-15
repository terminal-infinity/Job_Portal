<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Show Home page
    public function index(){
        return view('front.home');
    }
}
