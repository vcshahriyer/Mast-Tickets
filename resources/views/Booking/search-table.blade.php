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
                        @foreach($companies as $company)
                            <option>{{$company->name}}</option>
                        @endforeach
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
                            <th class="column2">Dep.Date & Time</th>
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
                                <p>{{$bus->name}}</p>
                                <p>{{$bus->bus_model}} {{$bus->bus_type}}</p>
                                <p>Route: {{$bus->route_from}} - {{$bus->route_to}}</p>
                            </td>
                            <td class=" column2"> <p>{{date('d-m-Y',strtotime($dept_date))}}</p> {{date('h:i A', strtotime($bus->dept_time))}}</td>
                            <td class=" column3">{{date('h:i A', strtotime($bus->arr_time))}}</td>
                            @foreach($booked_seat as $booked)
                                @if($booked->bus_id == $bus->id)
                                    <td class="column4 text-center">
                                        {{$total = $bus->seats - $booked->total_booked}}<br>
                                        <a href="{{route('booking',['date'=>date('Y-m-d',strtotime($dept_date)),'cid'=>$bus->company_id,'bid'=>$bus->id])}}" class="btnbook">View Seats</a>
                                    </td>
                                @endif
                            @endforeach
                            @if(!isset($total))
                                <td class="column4 text-center">
                                    {{$bus->seats}}<br>
                                    <a href="{{route('booking',['date'=>date('Y-m-d',strtotime($dept_date)),'cid'=>$bus->company_id,'bid'=>$bus->id])}}" class="btnbook">View Seats</a>
                                </td>
                            @endif
                                <td class=" column5">
                                <span class="price">{{$bus->fare}}</span>
                            </td>
                        </tr>
                            @php
                                unset($total);
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection