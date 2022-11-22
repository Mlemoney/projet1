<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $nom = 'Mlemoney';
        $age = 4;
        $tab = array('nom' =>"Mlem" , 'age' => 45);

        return view('myview', compact('nom', 'age'));
    }
}
