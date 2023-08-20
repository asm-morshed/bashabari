@extends('layout')

@section('content')

      


        <div class="d-flex justify-content-between px-5">
            <div class="titlearea">
                <h2>পদবী তালিকা</h2>
            </div>
            <div class="buttonarea">
                <a href="/admin/adddesignation" class="btn btn-primary stretched-link">তালিকা যোগ করুন</a>
            </div>
        </div>
        <hr>
        <!-- Content for the right div -->
        <table style="width: 600px" class="table table-striped m-auto" >
          <thead>
            <tr>
              <th scope="col">ক্রমিক</th>
              <th scope="col">পদবী</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($designations as $designation)
              
              <tr>
                  <th scope="row">{{ $designation->id }}</th>
                  <td>{{ $designation->designation }}</td>
                  
                  
                  
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    

    

@endsection