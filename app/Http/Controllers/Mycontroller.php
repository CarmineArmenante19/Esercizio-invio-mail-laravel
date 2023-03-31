<?php

namespace App\Http\Controllers;

use App\Mail\ContactMAil;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mycontroller extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function lavoraConNoi(){
        return view('lavora_con_noi');
    }

    public function submit(Request $request){
        $email = $request->email;
        $nome = $request->nome;
        $message = $request->message;
        $user = compact('email','nome','message');
        // dd('controlla la tua email');
        try{
            Mail::to($email)->send(new ContactMAil($user));
        }catch(Exception $e){
            return redirect(route('homepage'))->with('errorMessage',"Ce stato un problema con l'invio della tua email");
        };
        return redirect(route('homepage'))->with('message','La tua mail è stata correttamente inviata');
    }
}
