
@extends('admin.layouts.default')
@section('title', 'Admin - Create Product')

@section('content')
<div class="container">
    @if(isset($success))
    <div class="alert alert-success" role="alert">{{ $success }}</div>
    @endif
    @if(isset($fail))
    <div class="alert alert-danger" role="alert">{{ $fail }}</div>
    @endif
    {!! Form::open(array('url' => 'admin/product/create', 'class' => 'form-horizontal')) !!}

            {{ csrf_field() }}  
            @if (isset($id))
            {!! Form::hidden('id', $id) !!}
            @endif

        <div class="form-group">
            {!! Form::label('name', 'Tên sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-9">
            {!! Form::text('name', $product['name'] ?? '', array('class' => 'form-control')) !!}
            </div>
        </div>


              <div class="panel-body">
                @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                </div>

                <img src="{{ asset('images/'.Session::get('image')) }}">


                {{Session::get('image')}}

                @endif

            @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control" value ="">
                </div>
                <div class="col-md-6">

                    <button type="button" id="upload_image" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>

      </div>

        <div class="form-group">
            {!! Form::label('price', 'Giá sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-3">
            {!! Form::text('price', $product['price'] ?? '', array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('content', 'Nội dung sản phẩm', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-9">
            {!! Form::textarea('content', $product['content'] ?? '', array('class' => 'form-control', 'rows' => 3)) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-3">
            {!! Form::checkbox('active', $product['active'] ?? '', true) !!}
            </div>
        </div>  

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Tạo sản phẩm', array('class' => 'btn btn-success')) !!}
            </div>
        </div>
    {!! Form::close() !!}

</div>
@endsection

