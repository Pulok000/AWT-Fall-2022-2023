<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Http\Controllers\RegistrationController;


class RegistrationController extends Controller
{
    //getRegistration

    function getRegistration(){
        return view('register');
    }
    function postRegistration(Request $request){

      
        $this->validate($request,
        [
            'name' => 'required||min:5||string',
            'email' => 'required||min:5'

        ],
        [
            'required'=>'Invalid name',
            'string' => 'Invail email'
        ]
        );



    $output = "<h1> Submitted</h1>";
    $output .="Name: ".$request->name;
    $output .="<br>Email: ".$request->email;
    return $output;

    }
}
