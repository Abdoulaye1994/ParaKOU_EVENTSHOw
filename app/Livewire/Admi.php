<?php

namespace App\Livewire;

use App\Models\conception;
use App\Models\concert;
use App\Models\Evente;
use App\Models\Festivale;
use App\Models\Hote;
use App\Models\Message;
use App\Models\Price;
use App\Models\Projet;
use App\Models\Visite;
use Livewire\Component;
use App\Models\Profil;
use App\Models\Tickey;
use App\Models\Tickeys;

class Admi extends Component
{
    public function render()
    {
        $Profil=Profil::all();
        $tickeys=Tickeys::all();
        return view('livewire.admi' , [


            'Eventes' => count(Evente::all()),
            'Projets' => count(Projet::all()),
            'concerts' => count(concert::all()),
            'conceptions' => count(conception::all()),
            'Festivales' => count(Festivale::all()),
            'Hotes' => count(Hote::all()),
            'Visites' => count(Visite::all()),
            'Prices' => count(Price::all()),
            'Messages' => count(Message::all()),

        ] , ['Profils' => $Profil] ,  ['Tickeys' => $tickeys]);




    }
}
