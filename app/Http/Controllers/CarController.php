<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class CarController extends Controller
{
    //
    public function create(Request $request){
        $make=$request->make;
        $model=$request->model;
        $produced_on=$request->produced_on;
        
        $car=new car();

        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;

        $car->save();
        return redirect()->back();
    }
    // public funtion show(){

    // }
}
