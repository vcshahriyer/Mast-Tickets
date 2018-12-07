@extends('dashboard.master')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Insertions</a></li>
                                <li class="active">Bus Registration</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Bus Insertion</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <form method="post">
                                @csrf
                                <div class="form-group"><label for="busModel" class=" form-control-label">Bus Model</label><input type="text" id="busModel" name="busModel" placeholder="Enter model of the bus" class="form-control {{ $errors->has('busModel') ? ' is-invalid' : '' }}" value="{{ old('busModel') }}">
                                    @if ($errors->has('busModel'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('busModel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group"><label for="busType" class=" form-control-label">Bus Type</label><input type="text" id="busType" name="busType" placeholder="AC/Non AC" class="form-control {{ $errors->has('busType') ? ' is-invalid' : '' }}" value="{{ old('busType') }}">
                                    @if ($errors->has('busType'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('busType') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="source" class=" form-control-label">Source</label><input type="text" id="source" name="source" placeholder="Enter starting point" class="form-control {{ $errors->has('source') ? ' is-invalid' : '' }}" value="{{ old('source') }}">
                                            @if ($errors->has('source'))
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('source') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group"><label for="destination" class=" form-control-label">Destination</label><input type="text" id="destination" name="destination" placeholder="Enter destination point" class="form-control {{ $errors->has('destination') ? ' is-invalid' : '' }}" value="{{ old('destination') }}">
                                            @if ($errors->has('destination'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="deptTime" class=" form-control-label">Dept. Time</label><input type="time" id="deptTime" name="deptTime" class="form-control {{ $errors->has('deptTime') ? ' is-invalid' : '' }}" value="{{ old('deptTime') }}">
                                            @if ($errors->has('deptTime'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptTime') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group"><label for="arrTime" class=" form-control-label">Arr. Time</label><input type="time" id="arrTime" name="arrTime" class="form-control {{ $errors->has('arrTime') ? ' is-invalid' : '' }}" value="{{ old('arrTime') }}">
                                            @if ($errors->has('arrTime'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('arrTime') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group"><label for="deptTime" class=" form-control-label">Seats</label><input type="number" id="seats" name="seats" placeholder="Number of seats" class="form-control {{ $errors->has('seats') ? ' is-invalid' : '' }}" value="{{ old('seats') }}">
                                            @if ($errors->has('seats'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('seats') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group"><label for="arrTime" class=" form-control-label">Fare</label><input type="number" id="fare" name="fare" placeholder="Price of a seat" class="form-control {{ $errors->has('fare') ? ' is-invalid' : '' }}" value="{{ old('fare') }}">
                                            @if ($errors->has('fare'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fare') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input type="text" hidden name="cmp" value="{{$user->company}}">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection