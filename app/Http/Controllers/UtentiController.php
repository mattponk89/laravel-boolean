<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Utente;

class UtentiController extends Controller
{
    public function index()
    {
        $data = Utente::all();
        return view('utenti', compact('data'));
    }

    public function show($id)
    {
        $user = Utente::find($id);
        return view('utente', compact('user'));
    }
}
