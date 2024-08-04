<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evente;
use App\Models\Projet;
use Livewire\WithPagination;

class AdmineController extends Controller
{
    public function indexadmin(){
        return view ('Dahs.admin');
    }

    use WithPagination;
    
    public function programming(){
        $projet = Projet::paginate(1);
        return view ('Dahs.programme', compact('projet'));
    }


    public function config(){
        return view ('Dahs.reception');
    }


    public function evenements(){
        return view ('Dahs.evenement');
    }

    public function indexhotel(){
        return view ('Dahs.hotel');
    }

    public function lieu(){
        return view ('Dahs.lieux');
    }


    public function progue(){
        return view ('Dahs.artiste');
    }

    public function gall(){
        return view ('Dahs.galleryse');
    }

    public function living(){
        return view ('Dahs.live');
    }


    public function sportfete(){
        return view('Dahs.Festivale');
    }
}
