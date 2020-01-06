<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function index()
    {
        return view('whatwedo');
    }
}
