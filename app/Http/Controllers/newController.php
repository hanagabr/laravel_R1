<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
       //  $news= new NewsData();
       // $news->title =$request->title;
       // $news->content =$request->content;
       // $news->author =$request->author;
       $message=[
        'title.required'=>'{{__messages.titleRequired}}',
        'content.required'=>'{{__messages.contentRequired}}',
        'author.required'=>'{{__messages.authorRequired}}',

       ];
      //$data =$request->only($this->columns);

      $data = $request->validate([
        'title'=>'required|string',
        'content'=>'required|string',
        'author'=>'required|string',
       ],$message);
    //  $data['published'] = isset($request[published]);
    //$car->published = 1;
   //}
   //else{
    //$car->published = 0;
   //}

     // NewsData::create($data);
      // return'done';
       //    $car->save();

    }


       // if(isset($request->published )){
        //    $news->published = true;
       // }
       // else{
       //     $news->published = false;
       // }
      //  $news->save();
        //return "news added successfully";
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $new=News::findOrfail($id);
        return view('NewsDetails',compact('news'));

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
          public function trashed(string $id){
            $new = News::onlyTrashed()->get();
            return view('trashed',compact(news));
        }
        public function restore(string $id):RedirectResponse{
    
            News::where('id',$id)->restore();
            return redirect('news');
        }
    
    }
