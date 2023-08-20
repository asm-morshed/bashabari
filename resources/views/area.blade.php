@extends('layout')

@section('content')

      


        <div class="d-flex justify-content-between px-5">
            <div class="titlearea">
                <h2>এরিয়া তালিকা</h2>
            </div>
            <div class="buttonarea">
                <a href="/admin/addarea" class="btn btn-primary stretched-link">এরিয়া যোগ করুন</a>
            </div>
        </div>
        <hr>
        <!-- Content for the right div -->
        <table style="width: 600px" class="table table-striped m-auto" >
          <thead>
            <tr>
              <th scope="col">ক্রমিক</th>
              <th scope="col">এলাকার নাম</th>
              
            </tr>
          </thead>
          <tbody>
            
              @foreach ($areas as $area)
              
              <tr>
                  <th scope="row">{{ $area->id }}</th>
                  <td>{{ $area->area_name }}</td>
                  
                  
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    

    
@endsection