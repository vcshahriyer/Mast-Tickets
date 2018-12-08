@extends('dashboard.master')
@section('content')
        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cash"></i>
                                </div>
                                @php
                                    $total_rev = 0;
                                @endphp
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">$<span class="count">
                                                @foreach($revenue as $rev)
                                                    @php
                                                        $total_rev += $rev->fare * $rev->total_booked
                                                    @endphp
                                                @endforeach
                                                {{$total_rev}}
                                            </span>
                                        </div>
                                        <div class="stat-heading">Revenue</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{$orders->count()}}</span></div>
                                        <div class="stat-heading">Sales</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">{{count($buses)}}</span></div>
                                        <div class="stat-heading">Buses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">{{$customers}}</span></div>
                                        <div class="stat-heading">Customers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Widgets End -->

            <div class="clearfix"></div>
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Orders </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="">Bus Info</th>
                                                <th>Dept. Date</th>
                                                <th>Customer Name</th>
                                                <th>Customer Phone</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td class="serial">{{$loop->iteration.'.'}}</td>
                                                <td class="avatar">
                                                    <p>{{$order->bus_model}}</p>
                                                    <p>Route: {{$order->route_from}} - {{$order->route_to}}</p>
                                                    <p>Dept time: {{date('h:i A', strtotime($order->dept_time))}}</p>
                                                    <p>Seats: {{$order->seats}} Fare: {{$order->fare}}</p>
                                                </td>
                                                <td> {{$order->dept_date}} </td>
                                                <td>  <span class="name">{{$order->cs_name}}</span> </td>
                                                <td> <span class="product">{{$order->cs_mobile}}</span> </td>
                                                <td><span class="count">{{$order->booked_seats}}</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Pending</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if($orders->isEmpty())
                                            <tr>
                                                <td></td>
                                                <td colspan="6"><h2 class="no-result-found">No result found !</h2></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->

                    <div class="col-xl-4">
                        <div class="row">
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div>
            </div> <!-- /.order -->

            <div class="clearfix"></div>
        </div> <!-- .content -->
@endsection