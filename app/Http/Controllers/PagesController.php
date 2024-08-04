<?php

namespace App\Http\Controllers;

use App\Models\conception;
use App\Models\Evente;
use App\Models\concert;
use App\Models\Festivale;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Visite;
use App\Models\Price;
use App\Models\Hote;

class PagesController extends Controller
{


    public function index(){
        $Visite=Visite::all();
        return view('Pages.visite' , ['Visites' => $Visite]);
    }

    public function evente(){
        $Festivale=Festivale::all();
        $conception=conception::all();
        $concert=concert::all();
        $Evente=Evente::all();
        return view('Pages.event',
        [
            'Eventes' => $Evente,
            'concerts' => $concert,
            'conceptions' => $conception,
            'Festivales' => $Festivale
    ]);
    }

    public function hotels(){
        $Hote=Hote::all();
        return view('Pages.hotel' , ['Hotes' => $Hote]);
    }

    public function progu(){
        $Projet=Projet::all();

        return view('Pages.program' , ['Projets' => $Projet] );

    }

    public function buyticket(){
        $Price=Price::all();
        return view('Pages.ticket' , ['Prices' => $Price]);


    }


    public function artiste(){
        return view('Pages.listeartiste');
    }

    public function bloguer(){
        return view('Pages.blog');
    }

    public function pkbloguer(){
        return view('Pages.parakou_blog');
    }

    public function anime(){
        $Festivale=Festivale::all();
        return view('Pages.animation' , ['Festivales' => $Festivale]);
    }

    public function cont(){
        $concert=concert::all();
        return view('Pages.concert' , ['concerts' => $concert]);
    }

    public function cultes(){
        $conception=conception::all();
        return view('Pages.cultures' ,['conceptions' => $conception]);
    }

    public function pkrest(){

        return view('Pages.restaurentpk' );
    }

    public function specta(){
        $Evente=Evente::all();
        return view('Pages.spectacles' , ['Eventes' => $Evente]);
    }


}

