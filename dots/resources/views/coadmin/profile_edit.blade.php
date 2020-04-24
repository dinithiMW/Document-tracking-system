@extends('layouts.coadmin')

@section('title')
   Edit Profiles
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" > EDIT YOUR PROFILE</h4>
@if(session('status'))
                   <div class="alert alert-success" role="alert">
                     {{ session('status')}}
                   </div>
                @endif
</div>
<div class="card-body">
  <div class="row">
     <div class="col-md-6">
     
     <form action="/profile-register-update{{ $users->id }}" method="POST">
     {{ csrf_field() }} 
     {{ method_field('PUT') }}
   <div class="form-group">
      <label>Name</label>
      <input type="text" name="username" value=" {{ $users->name}}" class="form-control">
   </div>
   <div class="form-group">
      <label>Phone</label>
      <input type="text" name="phone" value=" {{ $users->phone}}" class="form-control">
   </div>
   <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" value=" {{ $users->email}}" class="form-control">
   </div>

  
        <button type="submit" class="btn btn-info btn-sm">Update</button>
        <a href="/changeProfile/{{ Auth::user()->id }}" class="btn btn-danger btn-sm">Cancel</a>
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