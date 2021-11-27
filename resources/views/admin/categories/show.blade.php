@extends('admin.layouts.default')
@section('title', 'Categories List')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
            <div class="form-group">
                <h2> {{ $category->id}} </h2>
            </div>
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->categories_name }}
            </div>
    </div>


@endsection
