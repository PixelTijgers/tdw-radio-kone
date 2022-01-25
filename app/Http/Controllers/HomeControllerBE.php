<?php

// Namespacing.
namespace App\Http\Controllers;

class HomeControllerBE extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('be.index');
    }
}
