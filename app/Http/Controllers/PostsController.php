<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Auth;

class PostsController extends Controller
{

    public function __construct(){

        $this->middleware("auth", ['except' => ['allBlog']]);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {

        $tabella = new Posts();
        $records = $tabella::all();
        
        $vettorePerLaView = [

            "titolo" => "Pagina inserimento dati del form",
            "sottoTitolo" => "Inserimento dei valori richiesti per l'invio dei dati del form alla PostController@store -- action function",
            "records" => $records,
        ];

        return view("VistePaginePostController.createPostForm", compact("vettorePerLaView"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return "action @@@ create di postController";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[

            "titolo" => "required",
            "body" => "required",
            "cover_image" => "image|nullable|max:1999",

        ]);

        $fileNameDaSavlare = "";

        if($request->file("cover_image")){

            $nomeFileWithExt = $request->file('cover_image')->getClientOriginalName();


            echo "file name selected: $nomeFileWithExt <br /> ";
            $ext            = pathinfo($nomeFileWithExt, PATHINFO_EXTENSION); // To get extension
            $nameWoutExt    = pathinfo($nomeFileWithExt, PATHINFO_FILENAME); // name file without extensione 
                        
            $fileNameDaSavlare = $nameWoutExt.time().'.'.$ext;

            $path = $request->file("cover_image")->storeAs("public/cover_images", $fileNameDaSavlare);
        }
        
        $titoloFromBladeForm = request("titolo");
        $bodyFromBladeForm = request("body");
        $imgFileName = $fileNameDaSavlare;
        $id_utente = auth::user()->id;



        $tabellaDB = new Posts();

        $tabellaDB->titolo = $titoloFromBladeForm;
        $tabellaDB->body = $bodyFromBladeForm;
        $tabellaDB->user_id = $id_utente;
        $tabellaDB->cover_image = $imgFileName;
        $tabellaDB->save();
        
        return redirect("/dashboard")->with("successo", "post creato correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $tabella = new Posts();
        $recordFiltratoPerID = $tabella::find($id);

        return view("VistePaginePostController.showViewGetMethos")->with("queryIdFiltrato",$recordFiltratoPerID);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabella = new Posts();
        $recordDelPost = $tabella::find($id);

        return view("VistePaginePostController.viewAggiornaPostByLoggedUser")->with("recordFiltratoDelPost", $recordDelPost);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $tabella = Posts::find($id);
        $tabella->delete();

        return redirect("/dashboard")->with("successo", "post eliminato correttamente");
    }



    public function inserisciPostAggiornato(Request $request, $id)
    {
        $this->validate($request,[

            "titolo" => "required",
            "body" => "required",
            "cover_image" => "image|nullable|max:1999",

        ]);


        $fileNameDaSavlare = "";

        if($request->hasFile("cover_image")){


            /*             
            per poter utilizzare la funzione di helper asset
            si deve prima creare il link simbolico col comando

            php artisan storage:link

            dopo si puo' utilizzare una sintassi del genere:

            <img src="{{ asset('storage/'.$cv->photo) }}" alt="...">            
            */


            $nomeFileWithExt = $request->file('cover_image')->getClientOriginalName();

            echo "file name selected: $nomeFileWithExt <br /> ";
            $ext            = pathinfo($nomeFileWithExt, PATHINFO_EXTENSION); // To get extension
            $nameWoutExt    = pathinfo($nomeFileWithExt, PATHINFO_FILENAME); // name file without extensione 

            echo "file name selected, senza estensione: $nameWoutExt <br /> file name selected, estensione: $ext ";
                        
            $fileNameDaSavlare = $nameWoutExt.time().'.'.$ext;

            $path = $request->file("cover_image")->storeAs("public/cover_images", $fileNameDaSavlare);
        }
        
        else{

            $fileNameDaSavlare = "noImage.jpg";
        }
        
        $titolo = $request->input("titolo");
        $body = $request->input("body");


        echo "dati ricevuti; <br /><br />";

        echo "\$titolo: $titolo<br />";
        echo "\$body: $body<br />";
        echo "\$ID: $id<br />";
    

        $tabella = Posts::find($id);

        $tabella->titolo = $titolo;
        $tabella->body = $body;
        $tabella->cover_image = $fileNameDaSavlare;
        $tabella->save();

        return redirect("/posts/{{$id}}")->with("successo", "post aggiornato correttamente");
    }
}
