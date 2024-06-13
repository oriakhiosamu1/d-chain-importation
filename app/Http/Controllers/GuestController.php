<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //RETURNS ABOUT PAGE
    public function about(){
        return view('home.about');
    }

    // RETURNS CONTACT US PAGE
    public function contact(){
        return view('home.contact');
    }
}
