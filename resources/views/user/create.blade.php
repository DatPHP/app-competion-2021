@extends('admin.layouts.default')

@section('title', 'Create new user')

@section('content')
   {!! Form::open(array('url' => 'admin/user/create', 'class' => 'form-horizontal')) !!}
   {{ csrf_field() }}

       @if (isset($id))
       {!! Form::hidden('id', $id) !!}
       @endif
       {!! Form::hidden('level', 1) !!}

      <div class="form-group">
         {!! Form::label('name', 'Họ và tên', array('class' => 'col-sm-2 control-label')) !!}
         <div class="col-sm-10">
             {!! Form::text('name', $user['name'] ?? '', array('class' => 'form-control', 'placeholder' => 'Nhap Ho Va Ten')) !!}                      
         </div>

      </div>

      <div class="form-group">
         {!! Form::label('email', 'Địa chỉ email', array('class' => 'col-sm-2 control-label')) !!}
         <div class="col-sm-10">
            {!! Form::email('email', $user['email']?? '', array('class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi')) !!}
         </div>
      </div>

     
      <div class="form-group">
            {!! Form::label('password', 'NHap Password', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
           
            {{ Form::input('password', 'password', $user['password']?? '',array('class' => 'form-control','placeholder' => 'Nhap password')) }}
          

          

           
            </div>
      </div>


      <div class="form-group">
         {!! Form::label('gender', 'Please input gender', array('class' => 'col-sm-2 control-label')) !!}
         <div class="col-sm-10">
             {!! Form::text('gender', $user['gender']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap gender')) !!}                      
         </div>
      </div>

      <div class="form-group">
         {!! Form::label('phone', 'Please input phone', array('class' => 'col-sm-2 control-label')) !!}
         <div class="col-sm-10">
             {!! Form::text('phone', $user['phone']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap phone')) !!}                      
         </div>
      </div>

      <div class="form-group">
         {!! Form::label('address', 'Please input address', array('class' => 'col-sm-2 control-label')) !!}
         <div class="col-sm-10">
             {!! Form::text('address', $user['address']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap address')) !!}                      
         </div>
      </div>

      <div class="form-group">
         {!! Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')) !!}
         <div class="col-sm-3">

         @if (isset($user) && $user['status'] == 1)
            {!! Form::checkbox('active', $user['active'], true) !!}
         @else
            {!! Form::checkbox('active', 0 , false) !!}
         @endif

         </div>
      </div>   



      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')) !!}
         </div>
      </div>

   {!! Form::close() !!}

@endsection