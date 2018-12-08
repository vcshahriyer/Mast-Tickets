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
                                <li><a href="#">View</a></li>
                                <li class="active">Bus</li>
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
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bus list</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Operator (Bus Type)</th>
                                    <th scope="col">Dep.Date & Time</th>
                                    <th scope="col">Arr. Time</th>
                                    <th scope="col">Total Seats</th>
                                    <th scope="col">Fare</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buses as $bus)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>
                                            <p>{{$bus->name}}</p>
                                            <p>{{$bus->bus_model}} {{$bus->bus_type}}  <a class="btn edit btn-xs btn-primary" href="{{route('UpdateBus',['BusID'=>$bus->id])}}">Edit</a></p>
                                            <p>Route: {{$bus->route_from}} - {{$bus->route_to}}</p>
                                        </td>
                                        <td>{{date('h:i A', strtotime($bus->dept_time))}}</td>
                                        <td>{{date('h:i A', strtotime($bus->arr_time))}}</td>
                                        <td>{{$bus->seats}}</td>
                                        <td>{{$bus->fare}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection