@extends('layouts.master')

@section('title')
   Registered Roles
@endsection




@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Documents</h4>
                @if(session('status'))
                   <div class="alert alert-success" role="alert">
                     {{ session('status')}}
                   </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    
                    <th style="color:rgb(19, 4, 48)">
                        Barcode
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Branch Name
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Time
                      </th>
                      
                      
                      <th class="text-right" style="color:rgb(19, 4, 48)">
                        DELETE
                      </th>
                    </thead>


                    <tbody>
                        @foreach ($scands as $row)
                      <tr>
                      
                        <td>
                          {{ $row->barcode }}
                        </td>
                        <td>
                        {{ $row->branch_name }}
                        </td>
                        <td>
                        {{ $row->created_at }}
                        </td>
                        
 
                        
                        <td class="text-right">
                        <form action="{{ url('file-delete/'.$row->id) }}" method="POST">
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                      
                        
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection





@section('scripts')

@endsection