<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>BashaBari</title>
</head>
<body>
    <h1 class="text-center mt-5">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগের বাসা বরাদ্ধের তালিকা</h1>
    
    <div class="card-body container">
      <form action="/filter/" method="get" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-3">
            <label>Filter by Date</label>
            
            <input type="date" name="start_date" value="{{ old('start_date')}}" class="form-control">
            
            {{-- <input type="date" name="start_date" value="{{ date('Y-m-d')}}" class="form-control"> --}}
            

          </div>
          <div class="col-md-3">
            <label>Filter by Date</label>
            
            <input type="date" name="end_date" value="{{ old('end_date')}}" class="form-control">
          </div>
          <div class="col-md-3">
            <label>Filter by Designation</label>
            <select name="status" class="form-select form-control" id="">
              <option value="">Select Status</option>
              <option value="ap">Assistant Programmer</option>
              <option value="ame">Assistant Maintenance Engineer</option>
            </select>
          </div>
          <div class="col-md-6">
            <br>
            <button type="submit" class="btn btn-primary">Filter</button>
          </div>
        </div>
      </form>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    </div>
    <hr>

    <div class="d-flex">
      <div class="left-div  col-md-3">
        <!-- Content for the left div -->
        <ul class="list-group menubar">
          <li class="list-group-item"><a href="/admin">তালিকা</a></li>
          <li class="list-group-item"><a href="/admin/designation">পদবী যোগ করুন</a></li>
          <li class="list-group-item"><a href="/admin/area">বাসার এরিয়া যোগ করুন</a></li>
          <li class="list-group-item"><a href="/admin">ডেটা যোগ করুন</a></li>
        </ul>
      </div>
      <div class="right-div col-md-9">
        <!-- Content for the right div -->
        <table style="width: 600px" class="table table-striped m-auto" >
          <thead>
            <tr>
              <th scope="col">ক্রমিক</th>
              <th scope="col">নাম</th>
              <th scope="col">পদবী</th>
              <th scope="col">অফিস</th>
              <th scope="col">জন্ম তারিখ</th>
              <th scope="col">পিআরএল</th>
              <th scope="col">বাসা নম্বর</th>
              <th scope="col">রেফারেন্স</th>
              <th scope="col">মন্তব্য</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($houses as $house)
              
              <tr>
                  <th scope="row">{{ $house->id }}</th>
                  <td>{{ $house->name }}</td>
                  <td>{{ $house->designation }}</td>
                  <td>{{ $house->office }}</td>
                  <td>{{ $house->dob }}</td>
                  <td>{{ $house->prl_date }}</td>
                  <td>{{ $house->house_no_name }}</td>
                  <td>{{ $house->reference_no }}</td>
                  <td>{{ $house->comment }}</td>
                  
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    </div>

    



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>