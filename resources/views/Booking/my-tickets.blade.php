@extends("Master")

@section("content")
    <!-- hero-start -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="reservation-hero">
                        <h2 class="rh-title">Find my tickets</h2>
                        <div class="reservation-hero-form">
                            <form action="{{route('Find-tickets')}}" method="post">
                                @csrf
                                <div class="rhf-input-box query">
                                    <span>Enter your Phone number</span>
                                    <input name="phone" type="text" id="phone">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-end -->


@endsection