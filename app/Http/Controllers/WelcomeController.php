<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller{
//=============================Start====================================//

public function index(){
    return view('welcome');
}

public function store(Request $request){
    $request->validate(['name' => 'required',
    
        ]);
   
}

//===============================/End==================================//
}
