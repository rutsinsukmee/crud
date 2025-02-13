@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Orderproduct</div>
                    <div class="card-body">
                        <a href="{{ url('/order-product/create') }}" class="btn btn-success btn-sm" title="Add New OrderProduct">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Photo</th><th>User Name</th><th>Quantity</th><th>Total</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orderproduct as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
		                                    <div><img src="{{ url('storage')}}/{{ $item->product->photo }}" width="100" /> </div>
            
                                            <div>{{ $item->product->title }}</div>
                                            <div>Price : {{ $item->product->sell_price }}</div>
                                        </td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>
                                            <a href="{{ url('/order-product/' . $item->id) }}" title="View OrderProduct"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/order-product/' . $item->id . '/edit') }}" title="Edit OrderProduct"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/order-product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete OrderProduct" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $orderproduct->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        <form method="POST" action="{{ url('/order') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="d-none" name="user_id" type="number" id="user_id" value="{{ Auth::id() }}" >
                            <textarea class="d-none" rows="5" name="remark" type="textarea" id="remark" ></textarea>
                                Total : <input name="total" type="number" id="total" value="{{ $orderproduct->sum('total') }}"  readonly>
                            <button class="btn btn-sm btn-primary" type="submit">
                                สั่งสินค้า
                            </button>    
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
