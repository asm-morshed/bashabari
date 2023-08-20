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
    <h1 class="text-center mt-5">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ <br> শিক্ষা মন্ত্রণালয় <br> বাসা বরাদ্দের তালিকা</h1>
    
    

    <div class="d-flex">
      <div class="left-div  col-md-2 m-auto">
        <!-- Content for the left div -->
        <ul class="list-group menubar">
          <li class="list-group-item"><a href="/admin">তালিকা</a></li>
          <li class="list-group-item"><a href="/adduser">নতুন বরাদ্দ যোগ করুন</a></li>
          <li class="list-group-item"><a href="/admin/designation">পদবী</a></li>
          <li class="list-group-item"><a href="/admin/area">বাসার এরিয়া</a></li>
          <li class="list-group-item"><a href="/admin/office">অফিস</a></li>
        </ul>
      </div>
      <div class="right-div col-md-10">


        @yield('content')
      </div>
    </div>

    



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>