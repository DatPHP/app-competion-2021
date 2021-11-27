@extends('admin.layouts.default')
@section('title', 'Categories List')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/admin/categories" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Edit Categories</h1>
                <p>Edit and submit this form to update a post</p>

                <hr>

              
                <form action="{{ route('categories.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Categories Name</label>
                            <input type="text" id="categories_name" class="form-control" name="categories_name"
                                   placeholder="Enter Categories Name" value="{{ $category->categories_name }}" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Update Categories Name
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection