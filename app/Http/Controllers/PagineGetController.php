<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use DB;


class PagineGetController extends Controller
{
    //

    public function __construct(){
        // $this->middleware("auth", ['except' => [ 'riferimenti', 'allBlog']]);
    }

    public function index(){  
        return view("VistePagineGetController.indexApp")->with();
    }




    public function mostraPostIdFiltrato($id) {
        $recordUtenteLoggato = Auth::user()->id;
        $recordsPostFiltratiPerID = DB::select("select * from posts where user_id = $recordUtenteLoggato AND posts.id = $id");
        return view("VistePagineGetController.viewGeControllertAggiornaEliminaPostUtenteLoggato")->with("recordsFiltrati", $recordsPostFiltratiPerID);
    }


    public function show() {

        $tabella = new Posts();
        $record = $tabella::all();

        $RecordInneroJoinOrdinato = DB::select("select u.name, p.titolo, p.body, p.id,  p.created_at, p.cover_image 
                                                from users u, posts p 
                                                where u.id = p.user_id 
                                                order by created_at  desc ");

        return view("VistePagineGetController.showBlog")->with("recordsPassatiAllaView", $RecordInneroJoinOrdinato);
    }


    public function service() {

        $vettore = [
            "titolo" => "titolo pagina dei servizi",
            "paragrafo" => "paragrafo pagina dei servizi",
            "sottoTitolo" => "sottotitolo di pagina"
        ];

        return view("VistePagineGetController.viewServiziGet", ["valoriPerLaView" => $vettore]);
    }


    public function about(){

        $valoriPerLaView = [
            "titolo" => "about page",
            "urlImg" => "https://images.unsplash.com/photo-1541728472741-03e45a58cf88?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80",
            "paragrafo" => "testo descrittivo del paragrafo della pagina  ...   <br /><br />          Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, facere aperiam? Nam quo exercitationem ",
            [
             "programmazione1" =>   "javascript",
             "programmazione2" =>   "php",
            ],
            [
             "programmazioneDesktop1" =>   "c++",
             "programmazioneDesktop2" =>   "java",
            ]
        ];

        return view("vistePagineGetController.viewAboutGetController", ["valoriDaPassareAllaView" => $valoriPerLaView] );
    } 

    public function developed(){

        $datiPerLaVista = [
            "titolo" => "Pagina Developes",
            "paragrafo" => "In questa pagina sono elencati nomi degli sviluppatori del progetto",

            "sviluppatori" =>[
                "nome1" => "giuseppe",
                "cognome1" => "tarallo",
                "nome2" => "alfio",
                "cognome2" => "jerry",
                "nome3" => "ciruzzo",
                "cognome3" => "esposito",
            ]
        ];

        return view("vistePagineGetController.viewDevelopedGetController")->with("passaggioDeiDati", $datiPerLaVista);
    } 

    
    public function riferimenti(){

        $datiPerLaView = [
            "titolo" => "titolo della pagina riferimenti",
            "paragrafo" => "paragrafo passato alla view dal controller.",
            
            [

                "elencoFornitureSevizi" => ["programmazione web", "programmazione desktop", "sistemistica", "linux", "windows", "consulenze" ],
                "giorniLavorativi" => ["lunedi'", "martedi'", "mercoledi'", "giovedi", "venerdi'", "sabato", "domenica" ],
            ]
            ];

        return view("VistePagineGetController.viewGetControllerRiferimenti")->with("datiPerRiferimentiView", $datiPerLaView);
    }
}
