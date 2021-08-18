@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Notice</li>
                    </ol>
                </nav>
                @include('admin.common.message')
                @foreach($notices as $item)
                <div class="card alert alert-info">
                    <div class="card-title alert alert-warning">{{$item->title}}</div>
                    <div class="card-body"><p>{{$item->description}}</p>
                    <p>
                        <span class="badge badge-success">{{auth()->user()->name}}</span>
                        <span class="badge badge-danger">{{$item->from}}</span>
                    </p>
                    </div>
                    <div class="card-footer">
                        <div class="float-left"><a href=""><i class="fa fa-pencil">Edit</i></a></div>
                        <div class="float-right"><a href=""><i class="fa fa-delete">Delete</i></a></div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
