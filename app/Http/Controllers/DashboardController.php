<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware("auth", ['except' => ['dashboard']]);
        // $this->middleware("auth", ['except' => ['riferimenti']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // punta alla vista: "dashboard", scelta da me
        // prima puntava alla view home di default


        // modo classico mostra tutti i records

        // $tabella = new Posts();   
        // $records = $tabella::all();
        
        // return view('dashboard')->with("recordsPerLaView", $records);


        // mostra solo i record legati all'utente loggato
        // necessita delle relazioni uno-a-molti fra le tabelle:
        // user ====many====> posts
        

        $userID = auth()->user()->id;
        $utente = User::find($userID);


        // estrae nome dell'utente loggato col relativo ID";
        // tramite relazione HasMany";

        return view('dashboard')->with("recordsPerLaView", $utente->posts);


    }
}
