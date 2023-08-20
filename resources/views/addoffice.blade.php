@extends('layout')

@section('content')

      

        <h2 class="container  mb-5">অফিস সংক্রান্ত তথ্য</h2>
        
        
    
        <form class="col-md-6 m-auto" method="POST" action="/admin/addoffice">
            @csrf
            
            <div class="mb-3">
                <label for="office_name" class="form-label">অফিসের নাম</label>
                <input type="text" class="form-control" id="office_name" name="office_name">
            </div>
            
            <div class="mb-6 mt-3">
                <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
            </div>
        
      </div>
    

    

@endsection