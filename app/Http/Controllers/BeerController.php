<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;

class BeerController extends Controller
{
    //
    public function home(){

        $beers = Beer::all();

        return view('home', compact('beers'));
    }
}
