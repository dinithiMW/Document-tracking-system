@extends('layouts.master')

@section('title')
   Registered Roles
@endsection




@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Branch Admins</h4>
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
                    <th>
                      Id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Phone Number
                      </th>
                      <th>
                        User Type
                      </th>
                      <th>
                        Branch Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                        EDIT
                      </th>
                      <th class="text-right">
                        DELETE
                      </th>
                    </thead>


                    <tbody>
                        @foreach ($users as $row)
                      <tr>
                      <td>
                          {{ $row->id }}
                        </td>
                        <td>
                          {{ $row->name }}
                        </td>
                        <td>
                        {{ $row->phone }}
                        </td>
                        <td>
                        {{ $row->usertype }}
                        </td>
                        <td>
                        {{ $row->branchname }}
                        </td>
                        <td>
                        {{ $row->email }}
                        </td>
 
                        <td class="text-right">
                         <a href="/role-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td class="text-right">
                         <a href="#" class="btn btn-danger">DELETE</a>
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