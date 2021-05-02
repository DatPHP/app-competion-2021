@extends('admin.layouts.default')
@section('title', 'Admin -Product List')
@section('content')
<a href="{{ route('admin.product.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Create new Account</a>

    <table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Nội dung</th>
            <!-----
            <th>Ảnh sản phẩm</th>
            -------> 

            <th>Đăng bán</th>
            <th>Action</th>
        </tr>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td class="text-right">{{ number_format($p->price) }}</td>
            <td>{{ $p->content }}</td>
            <!------
            <td>
                <img src="{{ Asset($p->image_path) }}" alt="{{ $p->name }}" width="120" height="120">
            </td>
            ------>
            <td>
                @if($p->active == 1)
                    <span class="text-success glyphicon glyphicon-ok">x</span>
                @else
                    <span class="text-danger glyphicon glyphicon-remove"></span>
                @endif
            </td>
            <td>
                <a href="{{ $p->id . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                <a href="{{ 'delete/'.$p->id }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
@endsection



     