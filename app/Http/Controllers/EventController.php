<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class EventController extends Controller
{
    public function index(){

        $event = event::all();
        return view('event.event', [ 'event' => $event]);

    }

}
