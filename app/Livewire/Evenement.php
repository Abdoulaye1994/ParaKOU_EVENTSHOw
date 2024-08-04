<?php

namespace App\Livewire;
use App\Models\Evente;
use Livewire\WithFileUploads;
use Livewire\Component;

class Evenement extends Component
{

    use WithFileUploads;

    public $image;
    public $titre;
    public $detail;
    public $id;
    public $imageup;
    public $update=false;


    public function render()
    {
        $Evente=Evente::all();
        return view('livewire.evenement', [
            'Eventes' => $Evente
        ]);
    }

    public function eventsave(){

        $Evente = new Evente;

        $Evente->image= $this->image->store('photos', 'public');
        $Evente->titre= $this->titre;
        $Evente->detail= $this->detail;
        $Evente->save();

    }

    public function deleteEvente($id){
        $data=Evente::find($id);
        $data->delete();
     }


     public function updateEvente($id){
        $Evente=Evente::find($id);

        $this->id=$Evente->id;
        $this->image=$Evente->image;
        $this->titre=$Evente->titre;
        $this->detail=$Evente->detail;
        $this->update=true;


    }

    public function updata($id){
        $data=Evente::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->detail=$this->detail;

        $data->save();



        return redirect()->route('event');

    }

}
