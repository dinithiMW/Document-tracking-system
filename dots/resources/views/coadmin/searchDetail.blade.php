@extends('layouts.coadmin')

@section('title')
   Admin Dashboard 
@endsection




@section('content')


<div class="row">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Search Documents</h4>
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
                        Barcode
                      </th>
                      <th>
                        Branch Name
                      </th>
                      <th>
                        Scan Time
                      </th>
                      
                      
                    </thead>

                    <tbody>
                    @foreach ($scands as $row)
                      <tr>
                        <td><a href="/searchfile">
                          {{$row->barcode}}</a>
                        </td>
                        <td>
                          {{$row->branch_name}}
                        </td>
                        <td>
                        {{$row->created_at}}
                        </td>
                        <td>
                        <div class="vl"></div>
                        </td>
                        
                      </tr>
                      
                        
                      @endforeach   
                    </tbody> 

                     
                     
                     
                  </table> 
                  
                  <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
    Applied
  </div>
  <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%">
    Agriculture
    
  </div>
  
</div>
                   
                </div>
              </div>
            </div> &nbsp <a href="/search" class="btn btn-primary">Back to Documentry</a>

            @endsection





@section('scripts')
<script>
 

</script>
@endsection