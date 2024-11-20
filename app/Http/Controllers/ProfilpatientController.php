<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilpatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the user profile page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('patient/profil-p');
    }
}
