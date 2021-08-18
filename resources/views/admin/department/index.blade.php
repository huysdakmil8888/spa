@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Department</li>
                    </ol>
                </nav>
                @include('admin.common.message')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $k=>$item)
                    <tr>
                        <th scope="row">{{$k+1}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            @if(isset(auth()->user()->role->permission['name']['department']['can-edit']))
                            <a href="{{route('departments.edit',$item->id)}}" class="btn btn-info">Edit</a>
                            @endif
                            @if(isset(auth()->user()->role->permission['name']['department']['can-delete']))
                                <a href="{{route('departments.destroy',$item->id)}}" class="btn btn-danger">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
