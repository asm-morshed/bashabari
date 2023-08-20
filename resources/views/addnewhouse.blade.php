@extends('layout')

@section('content')

      

        <h2 class="container  mb-5">কর্মকর্তা/কর্মচারীর তথ্য</h2>
        
        
        
        <form class="col-md-6 m-auto" method="POST" action="/adduser">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">নাম</label>
                <input type="name" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">পদবী</label>
                <select class="form-select form-control" aria-label="Default select example" name="designation_id">
                    <option selected>পদবী নির্বাচন করুন</option>
                    @foreach ($designations as $designation)
              
                    <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                   @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">জন্ম তারিখ</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="prldate" class="form-label">PRL তারিখ</label>
                <input type="date" class="form-control" id="prldate" name="prl_date">
            </div>
            <div class="mb-3">
                <label for="houseno" class="form-label">বসবাসরত বাসার নাম/নম্বর</label>
                <input type="text" class="form-control" id="houseno" name="house_no_name">
            </div>
            <div class="mb-3">
                <label for="housetype" class="form-label">বাসা টাইপ</label>
                <select class="form-select form-control" aria-label="Default select example" name="house_type">
                    <option selected>বাসা টাইপ নির্বাচন করুন</option>
                    
              
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                   
                  </select>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">এলাকা</label>
                <select class="form-select form-control" aria-label="Default select example" name="area_id">
                    <option selected>এলাকা নির্বাচন করুন</option>
                    @foreach ($areas as $area)
              
                    <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                   @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="reference_no" class="form-label">বাসা প্রাপ্তির স্মারক</label>
                <input type="text" class="form-control" id="reference_no" name="reference_no">
            </div>
            <div class="mb-3">
                <label for="datememorandum" class="form-label">স্মারকের তারিখ</label>
                <input type="date" placeholder="dd-mm-yy" class="form-control" id="" name="reference_date">
            </div>
            <div class="mb-3">
                <label for="office_id" class="form-label">অফিস নির্বাচন করুন</label>
                <select class="form-select form-control" aria-label="Default select example" name="office_id">
                    <option selected>অফিস</option>
                    @foreach ($offices as $office)
              
                    <option value="{{ $office->id }}">{{ $office->office_name }}</option>
                   @endforeach
                    
                  </select>
            </div>
            
            <div class="mb-3">
                <label for="comment" class="form-label">মন্তব্য</label>
                <input type="text" class="form-control" id="comment" name="comment">
            </div>
            
            

            <div class="mb-6 mt-3">
                <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
            </div>
        
      </div>
    

    
@endsection