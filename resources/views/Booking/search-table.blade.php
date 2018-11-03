@extends("Master")

@section("css")
    <link rel="stylesheet" href="{{asset("css/search-table.css")}}">
@endsection
@section("content")
    <div class="wrapper">
        <div class="container">
            <div class="filter-form">
                <span>Filter by: </span>
                <div class="styled-select rounded">
                    <select>
                        <option disabled selected>Operator</option>
                        <option>Hanif enterprise</option>
                        <option>Ena transport</option>
                        <option>Soukhin transport</option>
                    </select>
                </div>
                <div class="styled-select rounded">
                    <select>
                        <option disabled selected>Bus type</option>
                        <option>AC</option>
                        <option>Non AC</option>
                    </select>
                </div>
            </div>
            <div class="table-wrap">
                <div class="table-head">

                    <table>
                        <thead>
                        <tr class=" head">
                            <th class="column1">Operator (Bus Type)</th>
                            <th class="column2">Dep. Time</th>
                            <th class="column3">Arr. Time</th>
                            <th class="column4">Seats Available</th>
                            <th class="column5">Fare</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-body js-pscroll">
                    <table>
                        <tbody>
                        @foreach($buses as $bus)
                        <tr>
                            <td class=" column1">
                                <p>{{$bus->company_name}}</p>
                                <p>{{$bus->bus_model}} {{$bus->bus_type}}</p>
                                <p>Route: {{$bus->route_from}} - {{$bus->route_to}}</p>
                            </td>
                            <td class=" column2">{{date('h:i A', strtotime($bus->dept_time))}}</td>
                            <td class=" column3">{{date('h:i A', strtotime($bus->arr_time))}}</td>
                            <td class=" column4">{{$bus->seats - $bus->booked_seats}}</td>
                            <td class=" column5">
                                <span class="price">{{$bus->fare}}</span>
                                <a href="#" class="btnbook">View Seats</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection