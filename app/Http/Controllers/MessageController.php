<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    // public function store(Request $request){
    //     return $request;
    // }

    public function store(){

        //Este método nos devuelve a la página si falla la validación.
        //Y nos indica información del fallo de validación
       request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'

       ]);

       return 'Datos validados';
    }
}
