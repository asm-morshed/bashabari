@extends('layout')

@section('content')

      

        <h2 class="container  mb-5">পদবী সংক্রান্ত তথ্য</h2>
        
        
    
        <form class="col-md-6 m-auto" method="POST" action="/admin/adddesignation">
            @csrf
            
            <div class="mb-3">
                <label for="designation" class="form-label">পদবীর নাম</label>
                <input type="text" class="form-control" id="designation" name="designation">
            </div>
            
            <div class="mb-6 mt-3">
                <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
            </div>
        
      </div>
    

    

@endsection