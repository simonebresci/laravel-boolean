<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class Carslist extends Controller
{


    public static function index(){
      // Prendi tabella cars e passala alla view
      $cars = Car::all();
      return view('cars',[
        "cars" => $cars
      ]);
    }
}
