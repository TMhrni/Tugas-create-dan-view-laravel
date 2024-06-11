<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    function index() 
    {
        return view('produk');
    }

    function create()
    {
        return view('create_produk');
    }
}