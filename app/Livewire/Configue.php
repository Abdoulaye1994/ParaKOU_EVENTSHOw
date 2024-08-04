<?php

namespace App\Livewire;
use App\Models\Message;
use Livewire\WithFileUploads;
use Livewire\Component;

class Configue extends Component
{

    public function render()
    {
        $Message=Message::all();
        return view('livewire.configue' , ['Messages' => $Message]);
    }

    public function receptionsave(){
        $Message = new Message ;

        $Message->name= $this->name;
        $Message->email= $this->email;
        $Message->subject= $this->subject;
        $Message->msge= $this->msge;
        $Message->save();

    }


}
