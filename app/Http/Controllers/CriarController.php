<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarController extends Controller
{
    public function index(){
        return view('Events.criar');    
    }
}
