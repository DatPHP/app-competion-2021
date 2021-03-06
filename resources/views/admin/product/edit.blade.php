@extends('admin.layouts.default')
@section('title', 'Admin -Product Edit')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.product.list') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description">{{ $product->description }} </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="price" class="form-control" placeholder=""
                        value="{{$product->price}}">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        {!! Form::label('kind', 'Please choose kind', array('class' => 'col-sm-4 control-label')) !!}
                        <div class="col-sm-10">
                           {!!  Form::select('kind', array('sport' => 'sport', 'shoes' => 'shoes','bag'=>'bag'), 'shoes') !!}
                        </div>
                     </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        {!! Form::label('gender', 'Please choose gender', array('class' => 'col-sm-4 control-label')) !!}
                        <div class="col-sm-10">
                           {!!  Form::select('gender', array('men' => 'men', 'women' => 'women','kids'=>'kids'), $product->gender) !!}
                        </div>
                     </div>
            </div>

            @if($product->file_path)
                <img src="{{ URL::asset('images/products/'.$product->file_path) }}" width="250" height="200" >
            @endif
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection