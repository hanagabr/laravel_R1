<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;


class CarControler extends Controller
{
    private $columns=['carTitle','price','descreption'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::get();
        return view('CARS', compact('car'));

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
        $car= new Car();
        $car->carTitle =$request->carTitle;
        $car->price =$request->price;
        $car->descreption =$request->descreption;
        if(isset($request->published )){
            $car->published = true;
        }
        else{
            $car->published = false;
        }
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
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
          return 'deleted';  

    }
}
