<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class addcarController extends Controller
{
    public function car(){
        return view("addCar");
    }
    public function add(Request $request){
       // dd($request->all());
        return $request->title;
        return $request->price;
        return $request->description;
}}
