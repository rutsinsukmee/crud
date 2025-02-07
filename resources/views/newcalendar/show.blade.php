@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Newcalendar {{ $newcalendar->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/newcalendar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/newcalendar/' . $newcalendar->id . '/edit') }}" title="Edit Newcalendar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('newcalendar' . '/' . $newcalendar->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Newcalendar" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $newcalendar->id }}</td>
                                    </tr>
                                    <tr><th> Appointment </th><td> {{ $newcalendar->appointment }} </td></tr><tr><th> Location </th><td> {{ $newcalendar->location }} </td></tr><tr><th> Time </th><td> {{ $newcalendar->time }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
