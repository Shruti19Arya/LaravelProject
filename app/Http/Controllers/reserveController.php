<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reserveController extends Controller
{
    //
    function reserve(){

        return view('reservation');
    }

    function register(Request $request){
        
        $name= $request -> Name;
        $email= $request -> Email;
        $phone= $request -> Phone;
        $Table= $request -> Table;
        $DateTime= $request -> DateTime;
        $People= $request -> People;

        $request -> validate(['Name'=> 'required ','Email'=> 'required | email ',
        'Phone'=> 'required| digits:10','DateTime'=> 'required ','People'=> 'required ',
        'checkbox'=> 'required ']);
        return view('about');

    }

}
