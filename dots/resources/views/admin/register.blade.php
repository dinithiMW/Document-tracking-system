@extends('layouts.master')

@section('title')
   Registered Roles
@endsection




@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
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
                    <th style="color:rgb(19, 4, 48)">
                      Id
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Name
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Phone Number
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        User Type
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Branch Name
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Email
                      </th>
                      <!--   <th class="text-right">
                        EDIT
                      </th> -->
                      <th class="text-right" style="color:rgb(19, 4, 48)">
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
 
                        <!--
                        <td class="text-right">
                         <a href="/role-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>   -->
                        <td class="text-right">
                        <form action="{{ url('role-delete/'.$row->id) }}" method="POST">
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