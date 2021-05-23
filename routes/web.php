<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
 comandi da aggiungere

 se il link simbolico storage non e accessible da esplora risorse eliminarlo e ricrearlo

 $ php artisan storage:link
 
*/


Route::get('/', function () {

    $assocArray = [
        "title" => "Presentation page of the application: ",
        "parag" => "Lorem ipsum dolor sit amet." 
      ];



    return view('VistePagineGetController.getPresentazioneApp')->with("assocData", $assocArray);
});

$strGetController = "App\Http\Controllers\PagineGetController@";

Route::get("/home", "App\Http\Controllers\PagineGetController@index");
Route::get('/servizi', "App\Http\Controllers\PagineGetController@service");
Route::get("/about",$strGetController."about");
Route::get("/developed", $strGetController."developed");
Route::get("/riferimenti", "App\Http\Controllers\PagineGetController@riferimenti");

Auth::routes();
Route::get("/allBlog", "App\Http\Controllers\PagineGetController@show");

Route::post("/post/{recordUtenteFiltratoPerID}", "App\Http\Controllers\PostsController@inserisciPostAggiornato")->middleware("auth");
Route::get("/post/{recordUtenteFiltratoPerID}", "App\Http\Controllers\PagineGetController@mostraPostIdFiltrato")->middleware("auth");
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::resource("/posts" ,PostsController::class);
