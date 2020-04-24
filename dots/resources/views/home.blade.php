@extends('layouts.coadmin')

@section('title')
   Admin Dashboard 
@endsection




@section('content')

<div class="row">
  <div class="card">
    
<div class="col-md-12">
            
              <div class="card-header">
                <h4 class="card-title"> DASHBOARD</h4>
              </div>

              <div class="card-body">
                <div id="datatable" class="table-responsive">
                <table class="table">
                <caption>Your Scanned</caption>
                    <thead class=" text-primary">
                    
                    <th style="color:rgb(19, 4, 48)">
                        Barcode
                      </th>
                      
                      <th style="color:rgb(19, 4, 48)">
                        Scan Time
                      </th>
                      <th>
                        
                      </th>
                      
                      
                      
                    </thead>


                    <tbody>
                        @foreach ($documents as $row)
                      <tr>
                      
                        <td>
                          {{ $row->barcode }}
                        </td>
                        
                        <td>
                        {{ $row->created_at }}
                        </td>
                        
 
                        
                        
                      </tr>
                      @endforeach
                      
                        
                      
                    </tbody>
                  </table>
                
                  
                   
                </div>
              </div>
            </div> &nbsp 

@endsection





@section('scripts')
<script>
 

</script>
@endsection