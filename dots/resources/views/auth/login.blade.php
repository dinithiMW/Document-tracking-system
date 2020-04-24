@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
    
      <th >
      <div class="container" style=" background-color: #ebebe0;" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"  >
                <div class="panel-heading" style="color:grey; background-color:  white;"  ><b>Enter Your Login Details</b></div>

                <div class="panel-body" >
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}"  >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                            <i class="fa fa-user icon"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:white;">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></th>

<th scope="col"><li>
                <a href="">
              Tel - 0453454519
              </a>
              </li></th>
      
      
    </tr>
  </thead>
  </table>

  
@endsection
