<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriArtikel;

class kategoriArtikelcontroller extends Controller
{
    function index(){
    	$kategoriArtikel=kategoriArtikel::all();
    return view('kategori_Artikel.index',compact('kategoriArtikel'));
    }
}