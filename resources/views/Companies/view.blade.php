@extends("Master")

@section("css")
    <link rel="stylesheet" href="{{asset("css/search-table.css")}}">
@endsection
@section("content")
    <div class="wrapper">
        <div class="container">
            <div class="table-wrap">
                <div class="table-head">
                    <table>
                        <thead>
                        <tr class=" head">
                            <th class="column1">Company Name</th>
                            <th class="column2">Owner</th>
                            <th class="column3">Address</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-body js-pscroll">
                    <table>
                        <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td class=" column1">
                                <p>{{$company->name}}</p>
                            </td>
                            <td class=" column1">
                                <p>{{$company->owner}}</p>
                            </td>
                            <td class=" column1">
                                <p>{{$company->address}}</p>
                            </td>
                        </tr>
                        @endforeach
                        @if($companies->isEmpty())
                            <tr>
                                <td colspan="5"><h2 class="no-result-found">No Company found !</h2></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection