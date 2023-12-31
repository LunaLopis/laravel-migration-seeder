<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class Trainscontroller extends Controller
{
   

    public function index()
{
    // Carbon
    $now = now()->toDateString();
    $trains = Train::where('data_partenza', '>=', $now)->get();
    return view('home', compact('trains'));
}

 public function AllTrains(){
        $trains = Train::all();
   
        return view('AllTrains', compact('trains'));
     }
}
