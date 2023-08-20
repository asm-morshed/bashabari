<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Area;
use App\Models\User;
use App\Models\House;
use App\Models\Designation;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        
            return view('users.register');
        
    }

    // addemployeeview function for the html view
    public function addemployeeview(){
        
            $areas = Area::all();
            $designations = Designation::all();
            $offcies = Office::all();
            return view('addnewhouse')->with('areas',$areas)->with('designations',$designations)->with('offices',$offcies);
        
    }
    public function officeview(){
        
        $offcies = Office::all();
        return view('office')->with('offices',$offcies);
        
    }
    public function addoffice(){
        
            return view('addoffice');
        
    }
    public function adddesignation(){
        
            return view('adddesignation');
        
    }
    public function addarea(){
        
            return view('addnewarea');
        
    }
    
    public function areaview(){
      
            $areas = Area::all();
            return view('area')->with('areas',$areas);
           
    }
    
    public function designationview(){
        
            $designations = Designation::all();
            return view('designation')->with('designations',$designations);
        
    }
    
    // addemployee function for saving new Employee House information

    public function addemployee(Request $request){
        //  return $request->input();
        
        // $formFields = $request->validate([
        //     'name'=>['required'],
        //     'designation_id'=>'required',
        //     'dob'=>['required'],
        //     'prl_date'=>['required'],
        //     'house_no_name'=>['required'],
        //     'area_id'=>['required'],
        //     'office_id'=>['required'],
        //     'reference_no'=>['required'],
        //     'reference_date'=>['required'],
        //     'comment'=>['required'],
        // ]);
        // // $formFields['password']=bcrypt($formFields['password']);
        // return $formFields;
        
            $house = House::create($request->input());
            // auth()->login($user);
            return redirect('/admin')->with('message','New Information added!');
        
    }

    public function adddesignationpost(Request $request){
        // return $request;
       
            $formFields = $request->validate([
                'designation'=>['required','min:3'],
                
            ]);
            
            Designation::create($formFields);
            return redirect('/admin/designation')->with('message','User created and logged in!');
        
    }
    public function addnewoffice(Request $request){
        
            $formFields = $request->validate([
                'office_name'=>['required'],
                
            ]);
            Office::create($formFields);
            return redirect('/admin/office')->with('message','Office created!');
              
    }

    public function addnewarea(Request $request){
        
            // return $request;
            $formFields = $request->validate([
                'area_name'=>['required','min:3'],
                
            ]);
            
            Area::create($formFields);
            return redirect('/admin/area')->with('message','Area created and logged in!');
        
    }

    public function store(Request $request){
       
            $formFields = $request->validate([
                'name'=>['required','min:3'],
                'email'=>['required','email',Rule::unique('users','email')],
                'password'=>'required | confirmed ',
            ]);
            $formFields['password']=bcrypt($formFields['password']);

            $user = User::create($formFields);
            auth()->login($user);
            return redirect('/')->with('message','User created and logged in!');
          
    }
    public function login(){
        return view('users.login');
    }
    public function authenticate(Request $request){

        $credentials = $request->only('email', 'password');

        //  dd($request->email);
        // dd($credentials);
        // if (Auth::attempt($credentials)) {
            
        //     if($request->email==='mm.morshed1089@gmail.com')
        //     {
        //         return redirect('/');
        //     }
        //     else if($request->email==='ame@gmail.com'){
        //         return redirect('/admin');
        //     }
        //     // Authentication passed
        //     return redirect()->intended('/admin');
        // } else {
        //     // Authentication failed
        //     return redirect()->route('/')->withErrors([
        //         'email' => 'Invalid credentials',
        //     ]);
        // }

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        
        if(auth()->attempt($formFields)) {
            // dd($formFields);
            $request->session()->regenerate();

            return redirect('/admin')->with('message', 'You are now logged in!');
        }
        else{
            // dd($formFields);
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }

    }
    public function logout(Request $request){
        // return 'logout';
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('login')->with('message','You have been logout');
        
    }
}
