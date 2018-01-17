<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
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
    public function mensaje(Request $request){
        if($request->has('nombre')){
            return $request->input('nombre');

        }
        $request->all();


    }

}
