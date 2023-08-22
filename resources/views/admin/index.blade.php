@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                    </div>

                    <div class="card-body">
                        <ul>
                            @foreach ($categories as $item)
                                <li>{{$item->category_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Products</h3>
                    </div>

                    <div class="card-body">
                        <ul>
                            @foreach ($products as $item)
                                <li>{{$item->product_name}} - {{$item->product_price}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Products</h3>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>No Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
