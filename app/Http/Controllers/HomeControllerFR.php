<?php

// Namespacing.
namespace App\Http\Controllers;

// Facades.
use Illuminate\Http\Request;

class HomeControllerFR extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if user cookie is set. If not, show login page.
        if (\Cookie::has('userLogCookie') === false) {

            // Init view.
            return view('fr.login');
        }
        else {

            // Init view.
            return view('fr.index');
        }
    }

    /**
     * Get the user.
     *
     * @return Message
     */
    public function login(Request $request)
    {
        // Set the password.
        $password = 'KONEONEAIR2022!';

        if($request->password !== $password) {
            return redirect()->back()->with(['message' => 'Het wachtwoord is incorrect.']);
        }
        else {

            // Create cookie value.
            $cookieValue = \Hash::make($request->password);

            // Set user cookie for 15 minutes.
            \Cookie::queue(\Cookie::make('userLogCookie', $cookieValue, 60 * 30));

            // Return to index function.
            return redirect()->action([HomeControllerFR::class, 'index']);

        }
    }
}
