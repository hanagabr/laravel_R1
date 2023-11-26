<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsData;

class newController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $news = NewsData::get();
        return view('news', compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addnews');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
         $news= new NewsData();
        $news->title =$request->title;
        $news->content =$request->content;
        $news->author =$request->author;
        if(isset($request->published )){
            $news->published = true;
        }
        else{
            $news->published = false;
        }
        $news->save();
        //return "news added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
  }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new=NEWS::findOrfail($id);
        return view('UpdateNews',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // return view('UpdateNews');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
