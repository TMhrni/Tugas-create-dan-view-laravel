<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    function index() 
    {
        return view('SignIn');
    }

    function create()
    {
        return view('create_SignIn');
    }
}