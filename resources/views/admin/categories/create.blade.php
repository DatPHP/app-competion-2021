@extends('admin.layouts.default')
@section('title', 'Categories List')
@section('content')
            <a href="/admin/categories" class="btn btn-outline-primary btn-sm">Go back</a>
             <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Categories Name</label>
                            <input type="text" id="categories_name" class="form-control" name="categories_name"
                                   placeholder="Enter Categories Name" value="" required>
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

@endsection