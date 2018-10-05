@extends('Master')

@section('css')
<link href="css/login.css" rel='stylesheet' type='text/css' media="all" />
@endsection

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --> 

<div class="wrapper">
    <div class="form-w3ls">
        <div class="form-head-w3l">
            <h2>s</h2>
        </div>
        <ul class="tab-group cl-effect-4">
            <li class="tab active"><a href="#signin-agile">Sign In</a></li>
            <li class="tab"><a href="#signup-agile">Sign Up</a></li>        
        </ul>
        <div class="tab-content">
            <div id="signin-agile">   
                <form action="#" method="post">
                    
                    <p class="header">User Name</p>
                    <input type="text" name="user" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="required">
                    
                    <p class="header">Password</p>
                    <input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
                    
                    <input type="checkbox" id="brand" value="">
                    <label for="brand"><span></span> Remember me?</label>
                    
                    <input type="submit" class="sign-in" value="Sign In">
                </form>
            </div>
            <div id="signup-agile">   
                <form action="#" method="post">
                    
                    <p class="header">User Name</p>
                    <input type="text" name="user" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required">
                    
                    <p class="header">Email Address</p>
                    <input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
                    
                    <p class="header">Password</p>
                    <input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
                    
                    <p class="header">Confirm Password</p>
                    <input type="password" name="password" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
                    
                    <input type="submit" class="register" value="Sign up">
                </form>
            </div> 
        </div><!-- tab-content -->
    </div>
</div> <!-- /form -->	  
<!-- js files -->
<script src='js/jquery-3.2.0.min.js'></script>
<script src="js/login.js"></script>


@endsection
