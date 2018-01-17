<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('example',['only'=>['home']]);
    }

    public function home(){

        return view('home');
    }
    public function contact(){
        return view('contactos');
    }
    public function saludo($nombre='Invitado'){
        $consolas=[ "ps4", "xbox", "wii"];
        return view('saludos', compact('nombre','consolas'));
    }
    public function mensaje(CreateMessageRequest $request){

        $data = $request->all();//todos los datos del formulario
        //redirecciona a la pagina de contactos
        return redirect()->route('contactos')->with('info', 'Bienvenido');
    }

}
