<?php

namespace App\Livewire;
use App\Models\Evente;
use Livewire\Component;
use App\Models\pogram;
use App\Models\Projet;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Programme extends Component



{
    use WithPagination;
    use WithFileUploads;
    public $name;
    public $prenom;
    public $image;
    public $imageup;
    public $time;
    public $titre;
    public $details;
    public $evente_id;
    public $id;
    public $update=false;
    public $serch= '';



    public function render()

    {
         $Projet = Projet::paginate(1);

        //$pogram=pogram::all();
        $Projet=Projet::all();
        $Evente=Evente::all();
        return view('livewire.programme', ['Projets' => $Projet] , ['Eventes' => $Evente]);


    }

    public function savedata(){

        $pogram = new  pogram;
        $pogram->name= $this->name;
        $pogram->prenom= $this->prenom;
        $pogram->image= $this->image->store('photos', 'public');
        $pogram->save();

        return redirect()->route('programme')->with('success', ' New programme  ajouter avec succes');

    }


    public function saveprojet(){
        $Projet = new  Projet;
        $Projet->time= $this->time;
        $Projet->image= $this->image->store('photos', 'public');
        $Projet->titre= $this->titre;
        $Projet->details= $this->details;
        $Projet->evente_id= $this->evente_id;
        $Projet->save();



    }

    public function deleteProjet($id){
       $data=Projet::find($id);
       Storage::disk('public')->delete($data->image);
       $data->delete();
    }

    public function updateProjet($id){
        $Projet=Projet::find($id);

        $this->id=$Projet->id;
        $this->time=$Projet->time;
        $this->image=$Projet->image;
        $this->titre=$Projet->titre;
        $this->details=$Projet->details;
        $this->evente_id=$Projet->evente_id;
        $this->update=true;



        return redirect()->back();


    }

    public function updata($id){
        $data=Projet::find($id);

        $data->time=$this->time;

        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->details=$this->details;
        $data->evente_id=$this->evente_id;

        $data->save();

    }

}
