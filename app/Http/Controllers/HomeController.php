<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
