<?php

namespace App\Livewire;
use App\Models\Price;
use Livewire\Component;

class Artiste extends Component
{
    public $name;
    public $prix;
    public $place;
    public $vip;
    public $party;
    public $first;
    public $id;
    public $update=false;



    public function render()
    {
        $Price=Price::all();
        return view('livewire.artiste' , ['Prices' => $Price]);
    }

    public function takesave(){

        $Price = new Price;

        $Price->name= $this->name;
        $Price->prix= $this->prix;
        $Price->place= $this->place;
        $Price->vip= $this->vip;
        $Price->party= $this->party;
        $Price->first= $this->first;
        $Price->save();

    }


    public function deletePrice($id){
        $data=Price::find($id);
        $data->delete();
     }


     public function updatePrice($id){
        $Price=Price::find($id);

        $this->id=$Price->id;
        $this->name=$Price->name;
        $this->prix=$Price->prix;
        $this->place=$Price->place;
        $this->vip=$Price->vip;
        $this->party=$Price->party;
        $this->first=$Price->first;
        $this->update=true;

    }

    public function updata($id){
        $data=Price::find($id);



        $data->name=$this->name;

        $data->prix=$this->prix;

        $data->place=$this->place;

        $data->vip=$this->vip;

        $data->party=$this->party;

        $data->first=$this->first;

        $data->save();

    }
}
