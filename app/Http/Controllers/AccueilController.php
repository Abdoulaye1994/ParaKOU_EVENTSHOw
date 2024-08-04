<?php

namespace App\Http\Controllers;

use App\Models\conception;
use App\Models\concert;
use App\Models\Evente;
use App\Models\Festivale;
use App\Models\Projet;
use App\Models\Hote;
use App\Models\Tickeys;
use App\Models\Visite;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AccueilController extends Controller
{
    public function indexe(){

        $Festivale=Festivale::all();
        $concert=concert::all();
        $Evente=Evente::all();
        $Projet=Projet::all();
        $conception=conception::all();

        return view('Homepage.index',
        ['Eventes' => $Evente,
        'Projets' => $Projet,
        'concerts' => $concert,
        'conceptions' => $conception,
        'Festivales' => $Festivale

        ]);


    }

    public function imaging(){
        return view('Homepage.gallery');
    }

    public function home(){
        $Hote=Hote::all();
        $Visite=Visite::all();
        return view('Homepage.home' , [
            'Hotes' => $Hote,
            'Visites' => $Visite
        ]);


    }

    public function speker($id){

        $Evente = Evente::find($id);
        $Projet = Projet::all()->where('evente_id', '=', $id);
        return view('Homepage.speaker', [
            'Evente' => $Evente,
            'Projets' => $Projet,
        ]);
    }

    public function spouker($id){
        $Visite=Visite::find($id);
        return view('Homepage.speakerlieux' , [
            'Visite' => $Visite
        ]);
    }

    public function speklive($id){
        $concert=concert::find($id);
        return view('Homepage.speakerlive' , [
            'concert' => $concert
        ]);
    }

    public function park(){
        $Hote=Hote::all();
        return view('Homepage.parakou', ['Hotes' => $Hote]);
    }


    public function hometik(){
        $Tickeys=Tickeys::all();
        return view('Homepage.tickeyhome',   ['Tickey' => $Tickeys]);
    }


    public function hometiker(Request $request){

        Tickeys::create([
            'form_name' => $request->form_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'TicketForm' => $request->TicketForm,
        'Form' => $request->Form,
        'number' => $request->number,
        'message' => $request->message,
        ]);


        return redirect()->route('paymomo');
    }

    public function pay(){
        return view('Homepage.momopay');
    }
}
