<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Affiche la vue de connexion
    }
}
