<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdeuniscarController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function cars_list(){
        return view('cars-list');
    }

    public function terms(){
        return view('terms');
    }

    public function contact(){
        return view('contact');
    }
}
