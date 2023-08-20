<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\House;
use App\Models\Office;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    public function index(){
        // $employees = Employee::with('designation')->get();
        $house = House::with('designation')->get();
        $designations = Designation::all();
        $offcies = Office::all();
        return view('index')->with('houses',$house)->with('designations',$designations)->with('offices',$offcies);
    }
    public function admin(){
        
        
            $areas = Area::all();
            $designations = Designation::all();
            $offcies = Office::all();
            $house = House::all();
            return view('admin')->with('houses',$house)->with('areas',$areas)->with('designations',$designations)->with('offices',$offcies);
        
       
    }
    public function filter(Request $request){
        // dd(Auth::user()->email);
        // dd($request->status);
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $status = $request->status;
        $office = $request->office;
        // dd($request);
        $query = House::query();
        if($start_date && $end_date){
            $query->whereDate('prl_date','>=',$start_date)
            ->whereDate('prl_date','<=',$end_date);
        }
        if($status){
            $query->where('designation_id', $status);
        }
        if($office){
            $query->where('office_id', $office);

        }
        
        $house = $query->get();
        $designations = Designation::all();
        $offcies = Office::all();
        
        return view('index')->with('houses',$house,)->with('designations',$designations)->with('offices',$offcies);

    }
}
