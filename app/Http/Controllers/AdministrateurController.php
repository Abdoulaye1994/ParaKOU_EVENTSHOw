<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministrateurController extends Controller
{
    public function regist(Request $request){
        $Profil=Profil::all();


        return view('Pages.register' , ['Profils' => $Profil]);
    }


    public function regis(Request $request){
        Profil::create([
            'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        ]);

        return redirect()->route('logine');

    }




    public function logins(){
        $Profil=Profil::all();
        return view('Pages.login' , ['Profils' => $Profil]);
    }



    public function logs(Request $request){
         $identifiants = $request->only("email","password");
         Auth::attempt($identifiants);

        return redirect()->route('parakou');
    }





    public function cont(){
        return view('livewire.contact');
    }


    public function conter(Request $request){
        Message::create([
            'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'msge' => $request->msge,
        ]);

        return redirect()->route('homes');
    }



}
