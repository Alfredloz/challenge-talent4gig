<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /** Return view function 
     * 
     */
    public function index()
    {   
        return view('index');
    }
}
