<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventosController extends Controller
{
    public function index(){
        $events = Eventos::all();
        return view('Events.eventos',['events'=>$events]);
    }
}
