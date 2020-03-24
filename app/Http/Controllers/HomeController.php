<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $producten = DB::table('producten')->where('winkel', auth()->user()->winkel)->count();
        return view('home')->with('producten', $producten);
    }

    public function producten()
    {
        $producten = DB::table('producten')->where('winkel', auth()->user()->winkel)->count();
        return view('producten')->with('producten', $producten);;
    }
}
