@extends('layout')

@section('content')

      

        <h2 class="container  mb-5">এলাকা সংক্রান্ত তথ্য</h2>
        
        
    
        <form class="col-md-6 m-auto" method="POST" action="/admin/addnewarea">
            @csrf
            
            
            
            <div class="mb-3">
                <label for="area_name" class="form-label">এলাকার নাম</label>
                <input type="text" class="form-control" id="area_name" name="area_name">
            </div>
            
           
           
            
            
            

            <div class="mb-6 mt-3">
                <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
            </div>
        
      </div>
    

    
@endsection