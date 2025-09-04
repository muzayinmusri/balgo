<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halocontroller extends Controller
{
    function index(){
        $name="Muhammad";
        return view('halo.templatehalo', ['name' => $name]);
    }
}
