@extends('layouts.master')

@section('title')
   Edit Registered Branch
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3>Edit Registered Branch</h3>
</div>
<div class="card-body">
  <div class="row">
     <div class="col-md-6">
     
     <form action="/branch-register-update{{ $branches->branch_id }}" method="POST">
     {{ csrf_field() }} 
     {{ method_field('PUT') }}
   <div class="form-group">
      <label>Name</label>
      <input type="text" name="username" value=" {{ $branches->branch_name}}" class="form-control">
   </div>

   <div class="form-group">
   <label>Phone Number</label>
      <input type="text" name="phone" value=" {{ $branches->phone}}" class="form-control">
      </select>
   
   </div>

   <div class="form-group">
   <label>Email</label>
      <input type="email" name="email" value=" {{ $branches->email}}" class="form-control">
      </select>
   
   </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/branch" class="btn btn-danger">Cancel</a>
</form>   
     </div>
  </div>
</div>
</div>
</div>
</div>
</div>




@endsection


@section('scripts')
@endsection