<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  


class AboutController extends Controller
{
    public function index()
    {
        return view('about-us'); // Exemple de retour de vue pour "about-us"
    }
}

