<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriberita;

class kategoriberitacontroller extends Controller
{
    function index(){
    	$kategoriberita=kategoriberita::all();
    return view('kategori_berita.index',compact('kategoriberita'));
    }
}