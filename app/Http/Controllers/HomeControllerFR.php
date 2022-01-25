<?php

// Namespacing.
namespace App\Http\Controllers;

class HomeControllerFR extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fr.index');
    }
}
