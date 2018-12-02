@extends('Master')

@section('css')
    <link href="{{asset('css/login.css')}}" rel='stylesheet' type='text/css' media="all" />
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper">
        <div class="form-w3ls">
            <div class="form-head-w3l">
                <h3>Register your Company</h3>
            </div>
            <div class="tab-content">
                <div id="signup-agile">
                    <form action="#" method="post">
                        @csrf
                        <p class="header">Company Name</p>
                        <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company Name';}" required="required" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <p class="header">Company owner</p>
                        <input type="text" name="owner" class="{{ $errors->has('owner') ? ' is-invalid' : '' }}" placeholder="Your Company owner" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company owner';}" required="required" value="{{ old('owner') }}">
                        @if ($errors->has('owner'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('owner') }}</strong>
                            </span>
                        @endif
                        <p class="header">Address</p>
                        <input type="text" name="address" class="{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Your Company address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company address';}" required="required" value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                        <input type="submit" class="register" value="Sign up">
                    </form>
                </div>
            </div><!-- tab-content -->
        </div>
    </div> <!-- /form -->
    <!-- js files -->
@endsection