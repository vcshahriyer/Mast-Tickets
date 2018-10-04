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
                        <h2 class="rh-title">Reservation</h2>
                        <div class="reservation-hero-form">
                            <form action="#">
                                <div class="rhf-input-box">
                                    <span>Arrival Date</span>
                                    <input type="text" id="datepicker" placeholder="Date">
                                </div>
                                <div class="rhf-input-box">
                                    <span>Departure Date </span>
                                    <input type="text" id="datepicker4" placeholder="Date">
                                </div>
                                <div class="rhf-persons-room">
                                    <div class="rhf-persons">
                                        <span>Persons </span>
                                        <input type="number" value="1">
                                    </div>
                                    <div class="rhf-room">
                                        <span>Room</span>
                                        <input type="number" value="1">
                                    </div>
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
                                        <h2 class="sh-title">Grand Hotel</h2>
                                        <h4 class="sh-text">A place to experience and enjoy the life</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-hero">
                                        <h5 class="sh-intro">Welcome to</h5>
                                        <h2 class="sh-title">Grand Hotel</h2>
                                        <h4 class="sh-text">A place to experience and enjoy the life</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-hero">
                                        <h5 class="sh-intro">Welcome to</h5>
                                        <h2 class="sh-title">Grand Hotel</h2>
                                        <h4 class="sh-text">A place to experience and enjoy the life</h4>
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