@extends("Master")
@section("css")
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.seat-charts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/JSC_style.css')}}">
@endsection

@section("content")
    <div class="wrapper">
        <div class="container">
            <div class="alert alert-success" style="display:none"></div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div id="seat-map">
                <div class="front-indicator">{{$buses->name}}</div>
            </div>
            <div class="booking-details">
                <h2>Booking Details</h2>
                @if(isset($booked_seat))
                @php
                    $seats = explode(",",$booked_seat->seats);
                @endphp
                @endif
                <h3> Selected Seats (<span id="counter">0</span>):</h3>
                <ul id="selected-seats" class="scroll"></ul>

                Total: <b>$<span id="total">0</span></b>

                <button class="checkout-button" data-toggle="modal" data-target="#myModalHorizontal">Add Seats &raquo;</button>

                <div id="legend"></div>
            </div>
            <div class="booking-form">
                <form class="form-horizontal" method="post" action="{{route('booking.store')}}">
                    <div class="form-group">
                        <label  class="col-sm-4 control-label"
                                for="seats">Seats</label>
                        <div class="col-sm-8">
                            @csrf
                            <input type="text" class="{{ $errors->has('seats') ? ' is-invalid' : '' }}" name="seats" id="seats" value="" hidden/>
                            @if ($errors->has('seats'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('seats') }}</strong>
                                    </span>
                            @endif
                            <input type="number" class="{{ $errors->has('bus_id') ? ' is-invalid' : '' }}" name="bus_id" id="bus_id" value="{{$buses->id}}" hidden/>
                            @if ($errors->has('bus_id'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bus_id') }}</strong>
                                    </span>
                            @endif
                            <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="date" id="date" value="{{$date}}" hidden/>
                            @if ($errors->has('date'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                            @endif
                            <p class="scroll" id="selected"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"
                               for="csname">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="csname" />
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"
                               for="email">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   id="email" placeholder="example@mail.com" value="{{ old('email') }}"/>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"
                               for="email">Phone</label>
                        <div class="col-sm-8">
                            <input type="tel" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                   id="phone" placeholder="017xxxxxxxx" value="{{ old('phone') }}"/>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"
                               for="password" >Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   id="password" placeholder="Password"/>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"
                               for="Cpassword" >Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password_confirmation" class="form-control"
                                   id="Cpassword" placeholder="Confirm Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

@endsection





@section("script")
    <script src="{{asset('js/jquery.seat-charts.js')}}"></script>
    <script>
        var firstSeatLabel = 1;

        $(document).ready(function() {
            var $cart = $('#selected-seats'),
                $counter = $('#counter'),
                $total = $('#total'),
                sc = $('#seat-map').seatCharts({
                    map: [
                        'ee_ee',
                        'ee_ee',
                        'ee_ee',
                        'ee_ee',
                        'ee___',
                        'ee_ee',
                        'ee_ee',
                        'ee_ee',
                        'ee_ee',
                        'eeeee',
                    ],
                    seats: {
                        e: {
                            price   : {{$buses->fare}},
                            classes : 'economy-class', //your custom CSS class
                            category: 'Economy Class'
                        }

                    },
                    naming : {
                        top : false,
                        rows: ['A', 'B', 'C', 'D', 'E','F','G','H','I','J'],
                        columns: ['1', '2', '5', '3', '4','5'],

                        getLabel : function (character, row, column) {
                            return row + '_'+column;
                        },
                    },
                    legend : {
                        node : $('#legend'),
                        items : [
                            [ 'e', 'available',   'Economy Class'],
                            [ 'f', 'unavailable', 'Already Booked']
                        ]
                    },
                    click: function () {
                        if (this.status() == 'available') {
                            //let's create a new <li> which we'll add to the cart items
                            $('<li>'+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                                .attr('id', 'cart-item-'+this.settings.id)
                                .data('seatId', this.settings.id)
                                .appendTo($cart);

                            /*
                             * Lets update the counter and total
                             *
                             * .find function will not find the current seat, because it will change its stauts only after return
                             * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                             */
                            $counter.text(sc.find('selected').length+1);
                            $total.text(recalculateTotal(sc)+this.data().price);

                            return 'selected';
                        } else if (this.status() == 'selected') {
                            //update the counter
                            $counter.text(sc.find('selected').length-1);
                            //and total
                            $total.text(recalculateTotal(sc)-this.data().price);

                            //remove the item from our cart
                            $('#cart-item-'+this.settings.id).remove();

                            //seat has been vacated
                            return 'available';
                        } else if (this.status() == 'unavailable') {
                            //seat has been already booked
                            return 'unavailable';
                        } else {
                            return this.style();
                        }
                    }
                });

            //this will handle "[cancel]" link clicks
            $('#selected-seats').on('click', '.cancel-cart-item', function () {
                //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
                sc.get($(this).parents('li:first').data('seatId')).click();
                var listItems = $("#selected-seats li");
                var product = "";
                listItems.each(function(idx, li) {
                    var data = $(li).text();
                    data = data.substring(0, 3);
                    product += data+',';
                });
                var $seats = $('.form-horizontal').find('#seats');
                var $selected = $('.form-horizontal').find('#selected');
                $selected.html(product);
                $seats.attr("value", product);
            });

            //let's pretend some seats have already been booked
            sc.get([
            @if(isset($booked_seat))
                @foreach($seats as $seat)
                {!! '\''.$seat.'\',' !!}
                @endforeach
            @endif
            ]).status('unavailable');

        });

        function recalculateTotal(sc) {
            var total = 0;

            //basically find every selected seat and sum its price
            sc.find('selected').each(function () {
                total += this.data().price;
            });

            return total;
        }

    </script>
    <script src="{{asset("js/booking-data.js")}}"></script>
@endsection