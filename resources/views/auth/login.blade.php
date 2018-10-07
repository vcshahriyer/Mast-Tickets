@extends('Master')

@section('css')
<link href="css/login.css" rel='stylesheet' type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
@endsection

@section('content')
<div class="wrapper">
    <div class="form-w3ls">
        <div class="form-head-w3l">
            <h2>M</h2>
        </div>  
        <div class="tab-content"> 
            <div id="signin-agile">   
                <form action="{{route("login")}}" method="post">
                    @csrf
                    <p class="header">Email Address</p>
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <p class="header">Password</p>
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input type="checkbox" name="remember" id="remember" class="{{ old('remember') ? 'checked' : '' }}">
                    <label for="remember"><span></span> Remember me?</label>
                    
                    <input type="submit" class="sign-in" value="Sign In">
                    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </form>
            </div> 
        </div><!-- tab-content -->
    </div>
</div> <!-- /form -->	  
<!-- js files -->
@endsection

