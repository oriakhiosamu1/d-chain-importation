<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    //HOME VIEW
    public function home(){
            // men's products
            $men = Product::where('category', 'men')->latest()->take(3)->get();
            // women's products
            $women = Product::where('category', 'women')->latest()->take(3)->get();
            // kid's products
            $kids = Product::where('category', 'kids')->latest()->take(3)->get();
        return view('home.index', [
            'kids' => $kids,
            'women' => $women,
            'men' => $men
        ]);
    }

    // LOGIN ROUTE LEADS TO HOME PAGE
    public function login(){
        return redirect('/');
    }

    // DISPLAYS PAGES
    public function pages(){
        // dd(url()->current());
        $men = Product::where('category', 'men')->latest()->get();
        $women = Product::where('category', 'women')->latest()->get();
        $kids = Product::where('category', 'Kids')->latest()->get();

        return view('home.pages', [
            'men' => $men,
            'women' => $women,
            'kids' => $kids,
        ]);
    }
}
