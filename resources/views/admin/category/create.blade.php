@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Category
                            <a href="{{ url('category')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" name="category_name" id="" class="form-control" placeholder="Enter Category Name" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
