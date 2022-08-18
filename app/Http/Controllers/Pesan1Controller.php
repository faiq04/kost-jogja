<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pesan1Controller extends Controller
{
    public function index(){
        return view('pesan.pesan1');
    }
}
