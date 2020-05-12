@extends('layouts.coadmin')

@section('title')
   Admin Dashboard 
@endsection




@section('content')


<div class="row">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" > SEARCH DOCUMENT</h4>
    </div>
    <div class="col-md-4">
          <form action="/search" method="get">
          <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" >
            <span class="form-group-btn">
              <!--<button type="submit" class="btn btn-primary" >search</button>-->
            
                    <!-- Button to Open the Modal -->
<button type="submit" id="search" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
  Search
</button>
<!--<button type="submit" id="location" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
  location
</button>-->
</span>

          </div>
          </form>

          


       </div>
<div class="col-md-12">
            
              <div class="card-header">
              <h5 class="card-title" style="color:green; " >
              
               @foreach ($scands2 as $row)
              <img src="{{ URL::to('/assets/img/location.png') }}" alt="Smiley face" style="float:left;width:20px;height:20px;text-align: center"> &nbsp  {{ $row->barcode }} &nbsp Last Scanned : {{ $row->branch_name }}
              @endforeach
              
              </h5>
              </div>

              <div class="card-body">
                <div id="datatable" class="table-responsive">
                <table class="table">
                <caption>List of Documents</caption>
                    <thead class=" text-primary">
                    
                      <th style="color:rgb(19, 4, 48)">
                        Barcode
                      </th >
                      <th style="color:rgb(19, 4, 48)">
                        Branch Name
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Scan Time
                      </th>
                      <th>
                        
                      </th>
                      
                      
                      
                    </thead>


                    <tbody>
                        @foreach ($scands as $row)
                       
                      
                       
                      <tr>
                      
                        <td> {{ $row->barcode }}
                         
                        </td>
                        <td>
                       {{ $row->branch_name }}
                       
                        </td>
                        <td>
                        {{ $row->created_at }}
                        </td>
                        <td>
                        <i1 class="arrow up"></i1>
                        <div class="vl"></div>
                        
                        
                        
                        </td>
                        
                      </tr>
                      @endforeach
                      
                        
                      
                    </tbody>
                  </table>
                
                  <a href="/chart" class="btn btn-info btn-sm">Chart</a>
                  <a href="/search" class="btn btn-primary btn-sm">Back</a>
                  
                   
                </div>
              </div>
            </div> &nbsp 

            

            @endsection





@section('scripts')
<script>
  
</script>
@endsection