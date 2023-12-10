<?php

namespace App\Http\Controllers;
use App\Models\Car;
use app\traits\common;

use Illuminate\Http\Request;
class addcarController extends Controller
{
    public function car(){
        return view("addCar");
    }
    public function add(Request $request){
        $msg ="the title is <br>" .$request['carTitle'].
        "the content is<br>" .$request['price'].
        "the author is ".$request['descreption'];
         return $msg;
    }}
