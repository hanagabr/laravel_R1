<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\RedirectResponse;
use App\Models\NewsData;

class newController extends Controller
{
    private $columns=['title','content','author'];
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
        $new=NewsData::findOrfail($id);
        return view('NewsDetails',compact('new'));
//
  }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new=NewsData::findOrfail($id);
        return view('UpdateNews',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {      
        $publish=$request->only($this->columns);
        $publish['published']=isset($publish['published'])?true:false;
       NewsData::where('id', $id)->update($publish);
       return 'UPDATED';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        NewsData::where('id', $id)->delete();
          return 'deleted';  
          }
}
