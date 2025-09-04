<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halocontroller extends Controller
{
    function index(){
        $nama="Muhammad";
        return view('halo.templatehalo', compact('nama'));
    }
}
