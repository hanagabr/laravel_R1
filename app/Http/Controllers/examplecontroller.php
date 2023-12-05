<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\traits\common;
class examplecontroller extends Controller
{    
use common;
public function test1(){
    return view("login");
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