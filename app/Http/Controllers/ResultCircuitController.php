<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultCircuit;

class ResultCircuitController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $results = ResultCircuit::all();
        return view('result', compact('results'));
    }
}
