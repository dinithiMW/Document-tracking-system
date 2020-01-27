@extends('layouts.master')

@section('title')
   Edit Registered Document
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3>Edit Registered Document</h3>
</div>
<div class="card-body">
  <div class="row">
     <div class="col-md-6">
     
     <form action="/document-register-update{{ $documents->file_id }}" method="POST">
     {{ csrf_field() }} 
     {{ method_field('PUT') }}
   <div class="form-group">
      <label>Document Name</label>
      <input type="text" name="name" value=" {{ $documents->file_name}}" class="form-control">
   </div>

   
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/viewdocument" class="btn btn-danger">Cancel</a>
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