<?php
namespace App\Http\Controllers;
use App\traits\common;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Place;

class placeController extends Controller
{
    use common;
    private $columns=['title','rate','from','to','name','shortdesc','image'];
    
    public function index()
    {
        $place = Place::get();
        $place=Place::latest()->take(6)->get();
        return view('placeList', compact('place'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPlace');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //$place= new Place();
   //  $place->title =$request->title;
    //  $place->rate =$request->rate;
    //  $place->from =$request->from;
    //  $place->to =$request->to;
    //  $place->name =$request->name;
    //  $place->shortdesc =$request->shortdesc;
     // $place->image =$request->image;

      // $message=[ 'title.required'=>'title is required',
       //'rate.required'=>'descreption is required',
       //'from.required'=>'price is required' 
    //];
       $data = $request->validate([
        'title'=>'required|string',
       'rate'=>'required|string',
      'from'=>'required|string',
      'to'=>'required|string',
      'shortdesc'=>'required|string',
      'image'=>'required|sometimes:png,jpg,JPEG|max:2048',
       ] );       
      $fileName = $this->uploadFile($request->image,'assets/images');
      $data['image']= $fileName;
       Place::create($data);
       return'done';
     $place->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

        public function destroy(string $id):RedirectResponse
        {
            Place::where('id', $id)->delete();
              return redirect('placeList');  
        }
        public function trashed(string $id){
            $place = Place::onlyTrashed()->get();
            return view('trashed',compact(place));
        }
        public function restore(string $id):RedirectResponse{
    
            Place::where('id',$id)->restore();
            return redirect('placeList');
        }
        }

