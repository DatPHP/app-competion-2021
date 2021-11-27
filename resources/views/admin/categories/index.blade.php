
@extends('admin.layouts.default')
@section('title', 'Categories List')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($categories as $categories)
            <tr>
                <td>{{ $categories->id }}</td>
                <td>{{ $categories->categories_name }}</td>
                <td>
                <form action="{{ route('categories.destroy',$categories->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$categories->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$categories->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection