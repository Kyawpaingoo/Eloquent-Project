@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Products
                            <a href="{{url('product')}}" class="btn btn-primary float-end">
                            Back</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <div class="mb-3">
                            <label for="" class="form-label">Category:</label>
                            <select class="form-select" name="category_id" id="">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Product Name:</label>
                          <input type="text" name="product_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Product Price:</label>
                          <input type="number" name="product_price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
