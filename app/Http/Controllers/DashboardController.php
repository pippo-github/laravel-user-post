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
       
        $userID = auth()->user()->id;
        $utente = User::find($userID);

        return view('dashboard')->with("recordsPerLaView", $utente->posts);
    }
}
