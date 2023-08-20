@extends('layout')

@section('content')


        <div class="card-body container">
          <form action="/filter/" method="get" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-2">
                <label>হতে</label>
                
                <input type="date" name="start_date" value="{{ old('start_date')}}" class="form-control">
                
                {{-- <input type="date" name="start_date" value="{{ date('Y-m-d')}}" class="form-control"> --}}
                
    
              </div>
              <div class="col-md-2">
                <label>পর্যন্ত</label>
                
                <input type="date" name="end_date" value="{{ old('end_date')}}" class="form-control">
              </div>
              <div class="col-md-2">
                <label>পদবী</label>
                <select name="status" class="form-select form-control" id="">
                  <option value="">পদবী নির্বাচন করুন</option>
                  @foreach ($designations as $designation)
              
                    <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                   @endforeach
                </select>
              </div>
              <div class="col-md-2">
                <label>অফিস</label>
                <select name="office" class="form-select form-control" id="">
                  <option value="">অফিস নির্বাচন করুন</option>
                  @foreach ($offices as $office)
              
                    <option value="{{ $office->id }}">{{ $office->office_name }}</option>
                   @endforeach
                </select>
              </div>


              {{-- @foreach ($designations as $designation)
              
                    <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                   @endforeach --}}
              <div class="col-md-2">
                <label>বাসার টাইপ</label>
                <select name="houseType" class="form-select form-control" id="">
                  <option value="">টাইপ নির্বাচন করুন</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                </select>
              </div>
              <div class="col-md-3">
                <div class="row mt-4">
                  <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Filter</button>
    
                  </div>
                  <div class="col-md-6">
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger">Logout</button>
                  </form>
                  </div>
                </div>
              </div>
              
            </div>
            
          </form>
        </div>
        <hr>
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
              <th scope="col">বাসা নাম/নম্বর</th>
              <th scope="col">স্মারক নম্বর</th>
              <th scope="col">মন্তব্য</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($houses as $house)
              
              <tr>
                  <th scope="row">{{ $house->id }}</th>
                  <td>{{ $house->name }}</td>
                  <td>{{ $house->designation->designation }}</td>
                  <td>{{ $house->office->office_name }}</td>
                  <td>{{ $house->dob }}</td>
                  <td>{{ $house->prl_date }}</td>
                  <td>{{ $house->house_no_name }}</td>
                  <td>{{ $house->reference_no }}</td>
                  <td>{{ $house->comment }}</td>
                  
              </tr>
              @endforeach
            
          </tbody>
        </table>

        @endsection