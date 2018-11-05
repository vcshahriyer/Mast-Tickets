@extends("Master")

@section("content")
    <div class="wrapper">
        <div class="container">
            <div class="customer"><h2>Customer : {{$name->cs_name}}</h2></div>
            <div class="table-wrap">
                <div class="table-head">
                    <table>
                        <thead>
                        <tr class=" head">
                            <th class="column1">Operator (Bus Type)</th>
                            <th class="column2">Dep. Date</th>
                            <th class="column3">Dep. Time</th>
                            <th class="column4">Seats</th>
                            <th class="column5">Fare Total</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-body js-pscroll ticket_view">
                    <table>
                        <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td class=" column1">
                                <p>{{$ticket->name}}</p>
                                <p>{{$ticket->bus_model}} {{$ticket->bus_type}}</p>
                                <p>Route: {{$ticket->route_from}} - {{$ticket->route_to}}</p>
                            </td>
                            <td class=" column2">{{$ticket->dept_date}}</td>
                            <td class=" column4">{{date('h:i A', strtotime($ticket->dept_time))}}</td>
                            <td class=" column3 max-seats">{{$ticket->my_seats}}</td>
                            <td class=" column5">
                                <span class="price">{{$ticket->booked_seats*$ticket->fare}}</span>
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection/