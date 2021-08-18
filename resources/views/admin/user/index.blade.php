@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
                @include('admin.common.message')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th>Role</th>
                        <th>Department</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $k=>$item)
                    <tr>
                        <th scope="row">{{$k+1}}</th>
                        <td>{{$item->name}}</td>

                        <th scope="row">{{$item->role->name}}</th>
                        <th scope="row"><span class="badge badge-success">{{$item->department->name}}</span></th>
                        <td><img src="{{$item->image}}" alt="" style="width: 70px;height: 70px;"></td>
                        <td>
                            <a href="{{route('users.edit',$item->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('users.destroy',$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
