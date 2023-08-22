@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{url('category/create')}}" class="btn btn-primary float-end">
                        + Add Category</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->category_slug}}</td>
                                    <td>
                                        <form action="{{route('category.destroy',$category->id)}}" method="post">
                                            <a href="{{route('category.show',$category->id)}}" class="btn btn-success">Show</a>
                                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
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
