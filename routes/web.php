<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilpatientController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about-us', function () {
    return view('about');
})->name('about');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');;
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');;

//Authentification
Auth::routes();

Route::middleware(['auth', 'role:Médecin'])->group(function () {
    Route::get('/medecin-dashboard', function () {
        return view('Medecin\index-m');
    });
});

Route::middleware(['auth', 'role:Directeur'])->group(function () {
    Route::get('/directeur-dashboard', function () {
        return view('Directeur\index-dg');
    });
});

Route::middleware(['auth', 'role:Patient'])->group(function () {
    Route::get('/patient-dashboard', function () {
        return view('Patient\index-p');
    });
});

// Exemple si vous voulez personnaliser la route de connexion
//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [LoginController::class, 'login']);

//Patient
Route::get('/home_patient', [HomeController::class, 'index'])->name('home_patient');
Route::get('/patient', [ProfilpatientController::class, 'index'])->name('profil');
Route::get('/appointement', [ProfilpatientController::class, 'index'])->name('to do list');




