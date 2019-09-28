<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoripengumuman;

class kategoripengumumancontroller extends Controller
{
    function index(){
    	$kategoripengumuman=kategoripengumuman::all();
    return view('kategori_pengumuman.index',compact('kategoripengumuman'));
    }
}