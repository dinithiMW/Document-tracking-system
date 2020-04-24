@extends('layouts.master')

@section('title')
   Admin Dashboard 
@endsection




@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> DASHBOARD</h4>
              </div>
              <div class="card-body">
                <div class="container p-3 my-3 bg-dark text-white">
                <h4>TOTAL NUMBER OF CURRENT DOCUMENTS : {{ $barcodes }}</h4>
                

                
                
                <button type="button" class="btn btn-info btn-lg" ><a href="/document" style="color:white">MANAGE DOCUMENTS </a></button>
                <button type="button" class="btn btn-info btn-lg" ><a href="/role-register" style="color:white">MANAGE PROFILES</a> </button>
                
                

               
               
                </div>
              </div>
            </div>

           
@endsection





@section('scripts')

@endsection