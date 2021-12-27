<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function Create(){

        return view('create');
}
public function store(Request $request){

    $this->validate($request,[
        "name"     => "required|regex:/^[a-zA-Z\s]*$/",
        "password" => "required|min:6",
        "email"    => "required|email",
        "address"  =>"required|min:10",
        "url"      =>"required|url",
        "gander"     =>"required|in:male,female"

    ]);
 dd($request->except(['_token']));
}
}
