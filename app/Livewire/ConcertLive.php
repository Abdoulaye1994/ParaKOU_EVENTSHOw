<?php

namespace App\Livewire;
use App\Models\concert;
use Livewire\WithFileUploads;
use Livewire\Component;

class ConcertLive extends Component
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
        $concert=concert::all();
        return view('livewire.concert-live', ['concerts' => $concert]);
    }

    public function concertsave(){

        $concert = new concert;

        $concert->image= $this->image->store('photos', 'public');
        $concert->titre= $this->titre;
        $concert->detail= $this->detail;
        $concert->save();

    }

    public function deleteconcert($id){
        $data=concert::find($id);
        $data->delete();
     }


     public function updateconcert($id){
        $concert=concert::find($id);

        $this->id=$concert->id;
        $this->image=$concert->image;
        $this->titre=$concert->titre;
        $this->detail=$concert->detail;
        $this->update=true;

    }

    public function updata($id){
        $data=concert::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->detail=$this->detail;

        $data->save();

    }
}
