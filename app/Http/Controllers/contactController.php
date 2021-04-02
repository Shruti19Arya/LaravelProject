<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    function contact()
    {
        return view('contact');
    }

    function register(Request $request){
        
        $name= $request -> Name;
        $email= $request -> Email;
        $phone= $request -> Phone;

        $request -> validate(['Name'=> 'required ','Email'=> 'required',
        'Phone'=> 'required| digits:10']);
        return view('about');

    }

}
