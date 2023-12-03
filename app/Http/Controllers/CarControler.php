<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CarControler extends Controller
{
    private $columns=['carTitle','price','descreption','published'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::get();
        return view('cars', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCars');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $car= new Car();
       // $car->carTitle =$request->carTitle;
       // $car->price =$request->price;
       // $car->descreption =$request->descreption;
       $data =$request->only($this->columns);

       $request->validate([
        'carTitle'=>'required|string',
       'price'=>'required|string',
    'descreption'=>'required|string',
       ]);
    //   if(isset($request->published)){
    //$car->published = 1;
  // }
  // else{
  //  $car->published = 0;
   //}

       Car::create($data);
       return'done';
       //    $car->save();

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
        return view('UpdateCar',compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
