@extends('layouts.master')

@section('title')
   View Document
@endsection




@section('content')

<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Add New Document</b></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('addNewDocument') }}">
                        {{ csrf_field() }}

                        

                        <div class="form-group{{ $errors->has('document_name') ? ' has-error' : '' }}">
                            <label for="document_name" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="document_name" type="document_name" class="form-control" name="document_name" placeholder="Document name" value="{{ old('document_name') }}" required autofocus>

                                @if ($errors->has('document_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('document_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                            <label for="barcode" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="barcode" type="barcode" class="form-control" name="barcode" value="{{ old('barcode') }}" placeholder="Barcode" required autofocus>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sender_branch_name') ? ' has-error' : '' }}">
                            <label for="sender_branch_name" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="sender_branch_name" type="sender_branch_name" class="form-control" name="sender_branch_name" value="{{ old('sender_branch_name') }}" placeholder="Receiver Branch Name" required autofocus>

                                @if ($errors->has('sender_branch_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sender_branch_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('receiver_branch_name') ? ' has-error' : '' }}">
                            <label for="receiver_branch_name" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="receiver_branch_name" type="receiver_branch_name" class="form-control" name="receiver_branch_name" value="{{ old('receiver_branch_name') }}" placeholder="Sender Branch Name" required autofocus>

                                @if ($errors->has('receiver_branch_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('receiver_branch_name') }}</strong>
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
</div> -->


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Documents</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Bar Code
                      </th>
                      <th>
                        Document Name
                      </th>
                      <th>
                       Date
                      </th>
                      <th>
                        Sender Branch
                      </th>
                      <th>
                        Receiver Branch
                      </th>
                      
                      <th class="text-right">
                        EDIT
                      </th>
                      <th class="text-right">
                        DELETE
                      </th>
                    </thead>


                    <tbody>
                        
                        @foreach($documents as $row )
                          <tr>
                            <td>
                              {{ $row->barcode}}
                            </td>
                            <td>
                            {{ $row->file_name}}
                            </td>
                            <td>
                            {{ $row->date}}
                            </td>
                            <td>
                            {{ $row->sender_branch_name}}
                            </td>
                            <td>
                            {{ $row->receiver_branch_name}}
                            </td>
                            
     
                            <td class="text-right">
                             <a href="#" class="btn btn-success">EDIT</a>
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