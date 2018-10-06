@extends("Master")


@section("preloader")
<!-- <div id="preloader"></div> -->
@endsection

@section("content")
    <!-- hero-start -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="reservation-hero">
                        <h2 class="rh-title">Find a Bus</h2>
                        <div class="reservation-hero-form">
                            <form action="{{route("FindBus")}}" method="post">
                                @csrf
                                <div class="rhf-input-box">
                                    <span>From</span>
                                    <input name="from" type="text" id="from" placeholder="Enter City">
                                    @if ($errors->has('from'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('from') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="rhf-input-box">
                                    <span>To </span>
                                    <input name="to" type="text" id="to" placeholder="Enter City">
                                    @if ($errors->has('to'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('to') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="rhf-input-box i-date">
                                    <span>Date of Journey </span>
                                    <input name="date" type="text" id="datepicker" placeholder="Date">
                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="rhf-send">
                                    <button><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-12">
                    <div class="slider-hero-area">
                        <div id="carousel-example-generic" class="carousel slide">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="slider-hero">
                                        <h5 class="sh-intro">Welcome to</h5>
                                        <h2 class="sh-title">Mast Tickets</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-hero">
                                        <h5 class="sh-intro">Welcome to</h5>
                                        <h2 class="sh-title">Mast Tickets</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-hero">
                                        <h5 class="sh-intro">Welcome to</h5>
                                        <h2 class="sh-title">Mast Tickets</h2>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators carousel-indicators-numbers">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">1</li>
                                <li data-target="#carousel-example-generic" data-slide-to="1">2</li>
                                <li data-target="#carousel-example-generic" data-slide-to="2">3</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-end -->


@endsection