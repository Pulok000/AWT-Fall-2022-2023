<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        // return view("home")
        // ->with('name','Pulok Ahmed')
        // ->with('msg','Printng message using controller');

        return view('home',['name'=>'Pulok ahmed','msg'=>'Thats for the msg']);

    }

}
