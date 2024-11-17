<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\ContactController; 
use App\Http\Controllers\Auth\AboutController; 

use Illuminate\Support\Facades\Auth;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');




// Routes d'authentification
Auth::routes();

// Routes pour les patients
Route::prefix('patient')->middleware('auth')->group(function () {
    Route::get('/dashboard', [PatientController::class, 'dashboard'])->name('patient.dashboard');
    Route::get('/profile', [PatientController::class, 'profile'])->name('patient.profile');
    Route::get('/appointments', [AppointmentController::class, 'patientAppointments'])->name('patient.appointments');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('patient.storeAppointment');
});

// Routes pour les médecins
Route::prefix('doctor')->middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    Route::get('/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::get('/appointments', [AppointmentController::class, 'doctorAppointments'])->name('doctor.appointments');
    Route::get('/reports', [ReportController::class, 'index'])->name('doctor.reports');
    Route::post('/reports', [ReportController::class, 'store'])->name('doctor.storeReport');
});

// Routes pour le directeur
Route::prefix('director')->middleware(['auth', 'role:director'])->group(function () {
    Route::get('/dashboard', [DirectorController::class, 'dashboard'])->name('director.dashboard');
    Route::get('/appointments', [AppointmentController::class, 'allAppointments'])->name('director.appointments');
    Route::get('/statistics', [DirectorController::class, 'statistics'])->name('director.statistics');
    Route::get('/users', [DirectorController::class, 'users'])->name('director.users');
    Route::post('/users', [DirectorController::class, 'storeUser'])->name('director.storeUser');
});

// Gestion des utilisateurs (pour le directeur)
Route::prefix('admin')->middleware(['auth', 'role:director'])->group(function () {
    Route::get('/users', [DirectorController::class, 'manageUsers'])->name('admin.users');
    Route::get('/users/{user}/edit', [DirectorController::class, 'editUser'])->name('admin.editUser');
    Route::put('/users/{user}', [DirectorController::class, 'updateUser'])->name('admin.updateUser');
    Route::delete('/users/{user}', [DirectorController::class, 'destroyUser'])->name('admin.deleteUser');
});

// Route pour rediriger après l'authentification
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
// Route pour la page de connexion
Route::get('/login', [LoginController::class, 'ShowLoginForm'])->name('login');





