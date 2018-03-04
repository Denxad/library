<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('loggedin')->except('logout');
    }

    public function index() {
        return view('home.index');
    }
}
