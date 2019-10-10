@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Product {{ $product->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('product' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $product->title }} </td></tr><tr><th> Content </th><td> {{ $product->content }} </td></tr><tr><th> Sell Price </th><td> {{ $product->sell_price }} </td></tr><tr><th> Purchase Price </th><td> {{ $product->purchase_price }} </td></tr><tr><th> Photo </th><td> <img src="{{ url('storage') }}/{{ $product->photo }}" width="100" /> </td></tr><tr><th> Category Id </th><td> {{ $product->category_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                        <form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data" >
                            {{ csrf_field() }}

                            <input class="d-none" name="order_id" type="hidden" id="order_id" value="" >
                            <input class="d-none" name="product_id" type="hidden" id="product_id" value="{{ $product->id }}" >
                            <input class="d-none" name="user_id" type="hidden" id="user_id" value="{{ Auth::id() }}" >
                            <input name="quantity" type="number" id="quantity" value="1" 
                                onchange="document.querySelector('#total').value = parseFloat(document.querySelector('#quantity').value) * {{ $product->sell_price }}" >
                            <input class="d-none" name="total" type="hidden" id="total" value="{{ $product->sell_price }}" >

                            <button type="submit" class="btn btn-sm btn-warning" >
                                <i class="fa fa-shopping-cart"></i> เพิ่มสินค้าลงตะกร้า
                            </button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
