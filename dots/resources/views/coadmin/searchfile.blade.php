@extends('layouts.coadmin')

@section('title')
   Admin Dashboard 
@endsection




@section('content')


<div class="row">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> </h4>
    </div>
       




          <div class="col-md-12">
            
              <div class="card-header">
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                   <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Branch Name
                      </th>
                      <th>
                      Scan Time\Date
                      </th>
                      
                      
                      
                    </thead>

                    <tbody>
                    @foreach ($scands as $row)
                      <tr>
                        <td>
                          {{$row->branch_name}}
                        </td>
                        <td>
                          {{$row->created_at}}
                        </td>
                        
                        
                      </tr>
                      
                        
                      @endforeach
                    </tbody> 

                     
                     
                     
                  </table> 
                  
                   
                </div>
              </div>
            </div> &nbsp <a href="/home" class="btn btn-primary">Back to Dashboard</a>

            @endsection





@section('scripts')
<script>
 

</script>
@endsection