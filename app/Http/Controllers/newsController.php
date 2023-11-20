<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsData;

class newsController extends Controller
{
    public function news(){
        return view("addnews");
    }
   public function showNews(Request $request){
        $msg ="the title is <br>" .$request['title'].
        "the content is<br>" .$request['content'].
        "the author is ".$request['author'];
         return $msg;

 }
   }
    
