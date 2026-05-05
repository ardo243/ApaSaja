<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    function checkout()
    {
        return view('checkout');
    }
    function ticket() {
        return view('ticket');
    }
    public function index()
    {
        return view('events-detail');
    }

}
