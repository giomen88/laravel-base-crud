<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navbar_links = config('navbarlinks');

        return view('home', compact('navbar_links'));
    }

}
