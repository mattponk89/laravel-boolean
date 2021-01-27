<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utente;

class UtentiController extends Controller
{
    public function index() {
        $data = Utente::all();
        return view('utenti', ['db_utenti' => $data]);
    }
}
