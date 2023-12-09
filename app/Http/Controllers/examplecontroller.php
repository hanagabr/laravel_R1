<?php

namespace App\Http\Controllers;
use App\Models\Place;

use Illuminate\Http\Request;
use App\traits\common;
class examplecontroller extends Controller
{    
use common;
public function test1(){
    return view("login");
}
public function place(){
    return view("place");
}
public function addPlace(){
   return view("addPlace");
}
public function add(Request $request){
        $place= new Place();
    $place->title =$request->title;
    $place->rate =$request->rate;
    $place->from =$request->from;
    $place->to =$request->to;
     $place->name =$request->name;
     $place->shortdesc =$request->shortdesc;
      $place->image =$request->image;
      $place->save();
     return $added;
}

public function showUpload(){
    return view("upload");
}
public function Insert(Request $request){
    $file_extension=$request->image->getClientOriginalExtension();
    $file_name =time() . '.' .$file_extension;
    $path ='assets/images';
$request->image->move($path, $file_name);
$h = $this->uploadFile($request->photo, 'assets/images');
    return 'uploaded';
}
}