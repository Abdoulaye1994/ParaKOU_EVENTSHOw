<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Festivale;
use Livewire\WithFileUploads;

class Festiviter extends Component
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
        $Festivale=Festivale::all();
        return view('livewire.festiviter' , [
            'Festivales' => $Festivale
        ]);
    }


    public function fetesave(){

        $Festivale = new Festivale;

        $Festivale->image= $this->image->store('photos', 'public');
        $Festivale->titre= $this->titre;
        $Festivale->detail= $this->detail;
        $Festivale->save();

    }

    public function deleteFestivale($id){
        $data=Festivale::find($id);
        $data->delete();
     }


     public function updateFestivale($id){
        $Festivale=Festivale::find($id);

        $this->id=$Festivale->id;
        $this->image=$Festivale->image;
        $this->titre=$Festivale->titre;
        $this->detail=$Festivale->detail;
        $this->update=true;

        return redirect()->route('event');

    }

    public function updata($id){
        $data=Festivale::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->detail=$this->detail;

        $data->save();

    }

}
