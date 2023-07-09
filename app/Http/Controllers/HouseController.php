<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index(){
        $house = House::all();
        return view('index')->with('houses',$house);
    }
    public function filter(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        // return $request;
        // $designation = $request->status;

        // return $start_date + ' ' + $end_date;
        // return $request;
        $house = House::whereDate('prl_date','>=',$start_date)
                        ->whereDate('prl_date','<=',$end_date)
                        // ->where('designation','=',$designation)
                        ->get(); 
        $house->start_date = $start_date;
        return view('index')->with('houses',$house,);

    }
}
