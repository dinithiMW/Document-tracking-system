@extends('layouts.coadmin')

@section('title')
   View Document
@endsection




@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
      <h4 class="card-title"> SCAN BARCODE</h4>
    </div>
    <div class="col-md-4">
                    <form class="form-horizontal" method="POST" action="{{ url('scanDocument') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                            <label for="barcode" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="barcode" type="text" class="form-control" name="barcode" value="{{ old('barcode') }}" placeholder="Scan Here" required autofocus>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-info btn-sm">
                                   Submit 
                                </button>
                                </div>

                               

                               

                            
          
                        </div>     
                    </form>
  

</div>
</div>
</div>




@endsection





@section('scripts')

@endsection