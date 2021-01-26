<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LezioneController extends Controller
{
    public function index()
    {
        return view('lezione');
    }
}
