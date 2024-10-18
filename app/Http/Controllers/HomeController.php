<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Formulaire;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produits = Formulaire::first();
        return view('home', compact('produits'));
    }

    public function product(){
        $articles = Formulaire::first();
        return view('produit',compact('articles'));
    }
}
