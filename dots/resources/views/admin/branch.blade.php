@extends('layouts.master')

@section('title')
   Add New Branch
@endsection




@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Add New Branch</b></div>
                
                  
                  @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                     <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                  @endif

                  @if(session('response'))
                      <div class="alert alert-success">{{session('response')}}</div>
                  @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('addNewBranch') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                            <label for="branch" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="branch" type="branch" class="form-control" name="branch" value="{{ old('branch') }}" placeholder="Branch Name" required autofocus>

                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Branches</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Id
                      </th>
                      <th>
                        Branch Name
                      </th>
                      <th>
                        Phone Number
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
                        
                    @foreach($branches as $row )
                      <tr>
                      <td>
                        {{ $row->branch_id}}
                        </td>
                        <td>
                        {{ $row->branch_name}}
                        </td>
                        <td>
                        {{ $row->phone}}
                        </td>
                        <td>
                        {{ $row->email}}
                        </td>
                        
                        <td class="text-right">
                         <a href="/branch-edit/{{ $row->branch_id}}" class="btn btn-success">EDIT</a>
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