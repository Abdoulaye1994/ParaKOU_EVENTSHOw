<?php

namespace App\Livewire;
use App\Models\Hote;
use Livewire\WithFileUploads;

use Livewire\Component;

class Hotel extends Component
{
    use WithFileUploads;

    public $image;
    public $titre;
    public $quartier;
    public $id;
    public $imageup;
    public $update=false;

    public function render()
    {
        $Hote=Hote::all();
        return view('livewire.hotel', ['Hotes' => $Hote]);
    }

    public function hotelsave(){

        $Hote = new Hote;

        $Hote->image= $this->image->store('photos', 'public');
        $Hote->titre= $this->titre;
        $Hote->quartier= $this->quartier;
        $Hote->save();

    }


    public function deleteHote($id){
        $data=Hote::find($id);
        $data->delete();
     }


     public function updateHote($id){
        $Hote=Hote::find($id);

        $this->id=$Hote->id;
        $this->image=$Hote->image;
        $this->titre=$Hote->titre;
        $this->quartier=$Hote->quartier;
        $this->update=true;

    }

    public function updata($id){
        $data=Hote::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->quartier=$this->quartier;

        $data->save();


        return redirect()->route('hote');

    }

}
