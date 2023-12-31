<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Category;
use app\traits\common;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CarControler extends Controller
{

    private $columns=['carTitle','price','descreption','image','category_id'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::get();
        return view('cars', compact('car'));

    }
      
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories=Category::select('id','categoryName')->get();
        return view('addCars', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // $car= new Car();
     //$car->carTitle =$request->carTitle;
      // $car->price =$request->price;
      //  $car->descreption =$request->descreption;
       $message=['carTitle.required'=>'title is required',
       'descreption.required'=>'descreption is required',
       'price.required'=>'price is required' 
    ];
       $data =$request->only($this->columns);
       $request->validate([
        'carTitle'=>'required|string',
       'price'=>'required|string',
      'descreption'=>'required|string',
      'category_id'=>'required',
      'image'=>'required|sometimes:png,jpg,JPEG|max:2048',

       ] ,$message);       
      $fileName = $this->uploadFile($request->image,'assets/images');
      $data['image']= $fileName;
      $data['published']= isset($request[published]);
       Car::create($data);
       return'done';
         $car->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car=Car::findOrfail($id);
        return view('carDetail',compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $car=Car::findOrfail($id);
       $categories=Category::select('id','categoryName')->get();
        return view('UpdateCar',compact('car','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file_name=$request->image;
        $Image= $request->file('Image');
        if('$Image'!= ''){
        $request->validate([
            'carTitle'=>'required|string',
           'price'=>'required|string',
          'descreption'=>'required|string',
          'category_id'=>'required',
          'image'=>'required|sometimes:png,jpg,jpeg|max:2048',]);

          $file_name=$request->name.rand().'.' .$Image->getClientOriginalExtension();
          $file->move($path, $file_name);
        }
        else{

            $request->validate([
                'carTitle'=>'required|string',
               'price'=>'required|string',
              'descreption'=>'required|string',
              'category_id'=>'required|string',

            ]);   
        }

        $publish=$request->only($this->columns);
        $publish['published']=isset($publish['published'])?true:false;

        Car::where('id', $id)->update($publish);
        return 'UPDATED';
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Car::where('id', $id)->delete();
          return redirect('CARS');  
    }
    public function trashed(string $id){
        $cars = Car::onlyTrashed()->get();
        return view('trashed',compact(cars));
    }
    public function restore(string $id):RedirectResponse{

        Car::where('id',$id)->restore();
        return redirect('cars');
    }

}
