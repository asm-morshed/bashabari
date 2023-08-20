@extends('layout')

@section('content')

      


        <div class="d-flex justify-content-between px-5">
            <div class="titlearea">
                <h2>অফিস তালিকা</h2>
            </div>
            <div class="buttonarea">
                <a href="/admin/addoffice" class="btn btn-primary stretched-link">তালিকা যোগ করুন</a>
            </div>
        </div>
        <hr>
        <!-- Content for the right div -->
        <table style="width: 600px" class="table table-striped m-auto" >
          <thead>
            <tr>
              <th scope="col">ক্রমিক</th>
              <th scope="col">অফিসের নাম</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($offices as $office)
              
              <tr>
                  <th scope="row">{{ $office->id }}</th>
                  <td>{{ $office->office_name }}</td>
                  
                  
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    

    

@endsection