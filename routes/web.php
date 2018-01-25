<?php

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


Route::get('/',['as' => 'home','uses'=>'PageController@home']);

/**  Rutas con nombres, esto lo hacemos asignandole un alias a la ruta  con la palabra reservada 'as' y asigandole
 un nombre, todo esto encerrando la funcion entre corchetes **/
Route::get('contactanos', [ 'as'=> 'contactos', 'uses'=>'PageController@contact']);

Route::post('mensaje', 'PageController@mensaje');

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' =>'PageCOntroller@saludo'])-> where('nombre', "[A-Za-z]+");


///* Esta ruta solo permite letras esto lo hace con el where*/
//Route::get('saludos/{nombre?}', ['as' => 'saludos', function ($nombre ="Invitado"){
//    //return "Saludos $nombre";
//    /* Formas de pasar variables por parametros */
//    //return view('saludo')->with(['nombre'=>$nombre]);
//    return view('saludos',compact('nombre'));
//}])-> where('nombre', "[A-Za-z]+");

Route::get('mensaje/create',['as'=>'messages.create', 'uses'=>'MessagesController@create']);