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
                        <tr>
                            <td class=" column1">
                                <p>Relax Transport Ltd.</p>
                                <p>6, Hyundai Universe, AC Hyundai Universe Noble</p>
                                <p>Route: Dhaka - Chittagong</p>
                            </td>
                            <td class=" column2">9:00 AM</td>
                            <td class=" column3">11:00 AM</td>
                            <td class=" column4">25</td>
                            <td class=" column5">
                                <span class="price">700</span>
                                <button class="btnbook">View Seats</button>
                            </td>
                        </tr>

                        <tr>
                            <td class=" column1">
                                <p>Relax Transport Ltd.</p>
                                <p>6, Hyundai Universe, AC Hyundai Universe Noble</p>
                                <p>Route: Dhaka - Chittagong</p>
                            </td>
                            <td class=" column2">9:00 AM</td>
                            <td class=" column3">11:00 AM</td>
                            <td class=" column4">25</td>
                            <td class=" column5">
                                <span class="price">700</span>
                                <button class="btnbook">View Seats</button>
                            </td>
                        </tr>

                        <tr>
                            <td class=" column1">
                                <p>Relax Transport Ltd.</p>
                                <p>6, Hyundai Universe, AC Hyundai Universe Noble</p>
                                <p>Route: Dhaka - Chittagong</p>
                            </td>
                            <td class=" column2">9:00 AM</td>
                            <td class=" column3">11:00 AM</td>
                            <td class=" column4">25</td>
                            <td class=" column5">
                                <span class="price">700</span>
                                <button class="btnbook">View Seats</button>
                            </td>
                        </tr>

                        <tr>
                            <td class=" column1">
                                <p>Relax Transport Ltd.</p>
                                <p>6, Hyundai Universe, AC Hyundai Universe Noble</p>
                                <p>Route: Dhaka - Chittagong</p>
                            </td>
                            <td class=" column2">9:00 AM</td>
                            <td class=" column3">11:00 AM</td>
                            <td class=" column4">25</td>
                            <td class=" column5">
                                <span class="price">700</span>
                                <button class="btnbook">View Seats</button>
                            </td>
                        </tr>

                        <tr>
                            <td class=" column1">
                                <p>Relax Transport Ltd.</p>
                                <p>6, Hyundai Universe, AC Hyundai Universe Noble</p>
                                <p>Route: Dhaka - Chittagong</p>
                            </td>
                            <td class=" column2">9:00 AM</td>
                            <td class=" column3">11:00 AM</td>
                            <td class=" column4">25</td>
                            <td class=" column5">
                                <span class="price">700</span>
                                <button class="btnbook">View Seats</button>
                            </td>
                        </tr>

                        <tr>
                            <td class=" column1">Zumba Dance</td>
                            <td class=" column2">Dance</td>
                            <td class=" column3">5:00 PM - 7:00 PM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">20</td>
                        </tr>

                        <tr>
                            <td class=" column1">Cardio Blast</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">5:00 PM - 7:00 PM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Pilates Reformer</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Supple Spine and Shoulders</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">6:30 AM - 8:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">15</td>
                        </tr>

                        <tr>
                            <td class=" column1">Yoga for Divas</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">9:00 AM - 11:00 AM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">20</td>
                        </tr>

                        <tr>
                            <td class=" column1">Virtual Cycle</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">20</td>
                        </tr>

                        <tr>
                            <td class=" column1">Like a butterfly</td>
                            <td class=" column2">Boxing</td>
                            <td class=" column3">9:00 AM - 11:00 AM</td>
                            <td class=" column4">Aaron Chapman</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Mind & Body</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Adam Stewart</td>
                            <td class=" column5">15</td>
                        </tr>

                        <tr>
                            <td class=" column1">Crit Cardio</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">9:00 AM - 10:00 AM</td>
                            <td class=" column4">Aaron Chapman</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Wheel Pose Full Posture</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">7:00 AM - 8:30 AM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">15</td>
                        </tr>

                        <tr>
                            <td class=" column1">Playful Dancer's Flow</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Zumba Dance</td>
                            <td class=" column2">Dance</td>
                            <td class=" column3">5:00 PM - 7:00 PM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">20</td>
                        </tr>

                        <tr>
                            <td class=" column1">Cardio Blast</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">5:00 PM - 7:00 PM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Pilates Reformer</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">10</td>
                        </tr>

                        <tr>
                            <td class=" column1">Supple Spine and Shoulders</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">6:30 AM - 8:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">15</td>
                        </tr>

                        <tr>
                            <td class=" column1">Yoga for Divas</td>
                            <td class=" column2">Yoga</td>
                            <td class=" column3">9:00 AM - 11:00 AM</td>
                            <td class=" column4">Donna Wilson</td>
                            <td class=" column5">20</td>
                        </tr>

                        <tr>
                            <td class=" column1">Virtual Cycle</td>
                            <td class=" column2">Gym</td>
                            <td class=" column3">8:00 AM - 9:00 AM</td>
                            <td class=" column4">Randy Porter</td>
                            <td class=" column5">20</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection