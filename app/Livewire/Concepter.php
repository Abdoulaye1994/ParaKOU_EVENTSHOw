<?php

namespace App\Livewire;
use App\Models\conception;
use Livewire\WithFileUploads;
use Livewire\Component;

class Concepter extends Component
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

        $conception=conception::all();
        return view('livewire.concepter' ,[
            'conceptions' => $conception
        ]);
    }




    public function marchersave(){

        $conception = new conception;

        $conception->image= $this->image->store('photos', 'public');
        $conception->titre= $this->titre;
        $conception->detail= $this->detail;
        $conception->save();

    }

    public function deleteconception($id){
        $data=conception::find($id);
        $data->delete();
     }


     public function updateconception($id){
        $conception=conception::find($id);

        $this->id=$conception->id;
        $this->image=$conception->image;
        $this->titre=$conception->titre;
        $this->detail=$conception->detail;
        $this->update=true;

        return redirect()->route('event');

    }

    public function updata($id){
        $data=conception::find($id);



        if($this->imageup){
            $data->image= $this->imageup->store('photos', 'public');
        }


        $data->titre=$this->titre;

        $data->detail=$this->detail;

        $data->save();

    }


}
