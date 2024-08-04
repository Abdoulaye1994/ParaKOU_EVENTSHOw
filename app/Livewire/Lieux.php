<?php

namespace App\Livewire;
use App\Models\Visite;
use Livewire\WithFileUploads;
use Livewire\Component;

class Lieux extends Component
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
        $Visite=Visite::all();
        return view('livewire.lieux', ['Visites' => $Visite]);
    }

    public function lieuxsave(){

        $Visite = new Visite;

        $Visite->image= $this->image->store('photos', 'public');
        $Visite->titre= $this->titre;
        $Visite->detail= $this->detail;
        $Visite->save();

    }


    public function deleteVisite($id){
        $data=Visite::find($id);
        $data->delete();
     }


     public function updateVisite($id){
        $Visite=Visite::find($id);

        $this->id=$Visite->id;
        $this->image=$Visite->image;
        $this->titre=$Visite->titre;
        $this->detail=$Visite->detail;
        $this->update=true;

    }

    public function updata($id){
        $data=Visite::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->detail=$this->detail;

        $data->save();


        

    }

}
