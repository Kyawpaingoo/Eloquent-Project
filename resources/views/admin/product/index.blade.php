@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Products
                            <a href="{{url('product/create')}}" class="btn btn-primary float-end">
                            + Add Product</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Id</th>
                                    <th>Product Name</th>
                                    <th>Product Slug</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_slug}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>
                                        <form action="{{route('product.destroy',$product->id)}}" method="post">
                                            <a href="{{route('product.show',$product->id)}}" class="btn btn-success">Show</a>
                                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
