@extends('admin.layouts.default')

@section('title', 'Users List')

@section('content')
<a href="{{ route('admin.user.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Create new Account</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
     
            <th cope="col">ID</th>
            <th cope="col">Username</th>
            <th cope="col">email</th>
            <th cope="col">password</th>
            <th cope="col">status</th>
            <th  cope="col" colspan="4">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($users as $item)
  <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['password'] }}</td>
                <td>{{ $item['status'] }}</td>
                <td colspan="4">
                <button type="button" class="btn btn-outline-secondary"><a href="{{ route('user.edit', $item['id'] )}}"> Edit</button>
                <button type="button" class="btn btn-outline-danger"><a href="{{ route('user.delete', $item['id'] )}}"> Delete </a></button>
                </td>
            </tr>
            @endforeach
  </tbody>
</table>
  {!! $users->links() !!}
@endsection