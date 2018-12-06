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
            <div id="signup-agile">   
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <p class="header">User Name</p>
                        <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <p class="header">Company Name</p>
                        <input type="text" name="company" class="{{ $errors->has('company') ? ' is-invalid' : '' }}" placeholder="Your Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company Name';}" required="required" value="{{ old('company') }}">
                        @if ($errors->has('company'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                        @endif
                        <p class="header">Company owner</p>
                        <input type="text" name="owner" class="{{ $errors->has('owner') ? ' is-invalid' : '' }}" placeholder="Your Company owner" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company owner';}" required="required" value="{{ old('owner') }}">
                        @if ($errors->has('owner'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('owner') }}</strong>
                            </span>
                        @endif
                        <p class="header">Company Address</p>
                        <input type="text" name="address" class="{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Your Company address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Company address';}" required="required" value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif

                        <p class="header">Email Address</p>
                        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <p class="header">Upload Image</p>
                        <input type="file" name="image" id="file-2" class="inputfile inputfile-2 form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" data-multiple-caption="{count} files selected"/>
                        <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif

                        <p class="header">Password</p>
                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <p class="header">Confirm Password</p>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
                        
                        <input type="submit" class="register" value="Sign up">
                    </form>
                </div> 
        </div><!-- tab-content -->
    </div>
</div> <!-- /form -->	  
<!-- js files -->
@endsection