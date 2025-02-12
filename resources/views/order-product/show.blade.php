@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">OrderProduct {{ $orderproduct->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/order-product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/order-product/' . $orderproduct->id . '/edit') }}" title="Edit OrderProduct"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('orderproduct' . '/' . $orderproduct->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete OrderProduct" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $orderproduct->id }}</td>
                                    </tr>
                                    <tr><th> Order Id </th><td> {{ $orderproduct->order_id }} </td></tr><tr><th> Product Id </th><td> {{ $orderproduct->product_id }} </td></tr><tr><th> User Id </th><td> {{ $orderproduct->user_id }} </td></tr><tr><th> Quantity </th><td> {{ $orderproduct->quantity }} </td></tr><tr><th> Total </th><td> {{ $orderproduct->total }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
