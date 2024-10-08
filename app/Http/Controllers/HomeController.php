<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //$produits = Home::first();
        //return view('home', compact('produits'));
        return view('home');
    }

    public function product(){
        return view('produit');
    }
}
