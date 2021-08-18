@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Permission</li>
                    </ol>
                </nav>
                @include('admin.common.message')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th>Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $k=>$item)
                    <tr>
                        <th scope="row">{{$k+1}}</th>
                        <td>
                            {{$item->role->name}}
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{route('permissions.edit',$item->id)}}" class="btn btn-info">Edit</a>

                            <a data-toggle="modal" data-target="#exampleModal{{$item->id}}" href="{{route('permissions.destroy',$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @include('admin.common.modal-delete',['id'=>$item->id,'routeName'=>'permissions.destroy'])
                    @endforeach

                    </tbody>
                </table>
                {{--modal--}}
            <!-- Button trigger modal -->


            </div>

        </div>
    </div>
@endsection
