@extends('layouts.coadmin')

@section('title')
   Contact
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title" > CONTACT</h4>
@if(session('status'))
                   <div class="alert alert-success" role="alert">
                     {{ session('status')}}
                   </div>
                @endif
</div>
<div class="card-body">
  <div class="row">
     <div class="col-md-6">
     
     <form action="/sendemail/send" method="POST">
     {{ csrf_field() }} 
     
   <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="username"  class="form-control">
   </div>
   
   <div class="form-group">
      <label>Enter Your Email</label>
      <input type="text" name="email"  class="form-control">
   </div>

   <div class="form-group">
      <label>Enter  Your Message</label>
      <input type="text" cols="30" rows="10" name="phone" class="form-control">
   </div>

  
        <button type="submit" class="btn btn-info btn-sm">Send</button>
        <a href="/sendemail" class="btn btn-danger btn-sm">Cancel</a>
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