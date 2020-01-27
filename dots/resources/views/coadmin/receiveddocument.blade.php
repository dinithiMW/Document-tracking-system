@extends('layouts.coadmin')

@section('title')
   Received Document
@endsection




@section('content')
<br><br>

                           
                            
                 

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Received Documents</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Document Name
                      </th>
                      <th>
                        Bar Code
                      </th>
                      
                      <th>
                       Date
                      </th>
                      <th>
                        Receiver Branch
                      </th>
                      
                      <th class="text-right">
                        EDIT
                      </th>
                      <th class="text-right">
                        DELETE
                      </th>
                    </thead>


                    <tbody>
                        
                    
                      <tr>
                        <td>
                          gyu
                        </td>
                        <td>
                        hjk
                        </td>
                        
                        <td>
                        trd
                        </td>
                        <td>
                        trd
                        </td>
                        
 
                        <td class="text-right">
                         <a href="#" class="btn btn-success">EDIT</a>
                        </td>
                        <td class="text-right">
                         <a href="#" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                     
                      
                      
                        
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection





@section('scripts')

@endsection