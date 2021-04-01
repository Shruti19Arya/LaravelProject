<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function home () {
        return view('welcome');}
    
        function about () {
        return view('About');}
    
        function contact () {
        return view('Contact');}
    
        function menu () {
        return view('Menu');}
    
        function gallery() {
        return view('Gallery');}
    
        function reservation() {
        return view('Reservation');}
}
