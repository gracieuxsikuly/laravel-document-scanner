<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scancontroller extends Controller
{
    public function scan(){
        return view('scan');
    }
}
