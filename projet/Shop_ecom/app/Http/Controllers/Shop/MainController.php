<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $produits=produit::all();
        //dd($produits);
        return view('shop.index',compact('produits'));
    }
}
