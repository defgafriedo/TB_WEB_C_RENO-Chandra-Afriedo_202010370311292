<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    

    public function index(){
        $halaman = 'halaman View';
        return view('main',compact('halaman'));
    }
}
