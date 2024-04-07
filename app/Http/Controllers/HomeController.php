<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //Actua de manera que un usuario no logea quiera acceder al Home
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //si una persona se logea, automaticamente le redirecciona al Home
    public function index()
    {
        return view('home');
    }
}
