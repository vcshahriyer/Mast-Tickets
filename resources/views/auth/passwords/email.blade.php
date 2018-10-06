<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


@extends('Master')

@section('css')
<link href="{{asset('css/login.css')}}" rel='stylesheet' type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
@endsection

@section('content')
<div class="wrapper">
    <div class="form-w3ls">
        <div class="form-head-w3l">
            <h2>M</h2>
        </div>
        <div class="tab-content">
            <div id="signup-agile">  

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <p class="header">Email Address</p>
                        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        
                        <input type="submit" class="register" value="Send Password Reset Link">
                    </form>
                </div> 
        </div><!-- tab-content -->
    </div>
</div> <!-- /form -->	  
<!-- js files -->
@endsection


