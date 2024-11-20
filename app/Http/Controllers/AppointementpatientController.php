<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointementpatientController extends Controller
{
    // Middleware pour s'assurer que l'utilisateur est authentifié avant d'accéder à cette méthode
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Afficher la page des rendez-vous de l'utilisateur.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('patient/appointement-p');
    }

    /**
     * Récupérer et afficher les rendez-vous de l'utilisateur connecté.
     *
     * @return \Illuminate\Contracts\Support\Renderable
*/
  /*  public function showAppointments()
    {
        // Récupérer les rendez-vous de l'utilisateur connecté
        $appointments = Appointment::where('user_id', auth()->id())->get();

        // Si l'utilisateur n'a pas de rendez-vous, retourner une vue avec un message approprié
        if ($appointments->isEmpty()) {
            return view('appointments', ['message' => 'Aucun rendez-vous trouvé.']);
        }

        // Mapper les rendez-vous pour les passer au format d'événements pour le calendrier
        $events = $appointments->map(function ($appointment) {
            return [
                'title' => $appointment->title, // Titre du rendez-vous
                'start' => $appointment->start_time->toIso8601String(), // Heure de début au format ISO 8601
                'end' => $appointment->end_time->toIso8601String(), // Heure de fin au format ISO 8601
                'className' => 'bg-success', // Classe CSS pour la couleur de l'événement
            ];
        });

        // Passer les événements à la vue pour les afficher dans le calendrier
        return view('appointments', ['events' => $events]);
    }*/
}
