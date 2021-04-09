<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signcontroller extends Controller
{
    //
    
    function sign(){

        return view('Signup');
    }

    function post(Request $request){
        
        $name= $request -> Name;
        $email= $request -> Email;
        
        $request -> validate(['Name'=> 'required ','Email'=> 'required | email ',
        'profile'=>'required | file| mimes:jpg,jpeg,png','Password'=> 'required']);
        $extension = $request -> file('profile')-> extension();

        return view('menu');


    }

}
