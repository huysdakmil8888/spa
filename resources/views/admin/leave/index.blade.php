@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Leave</li>
                    </ol>
                </nav>
                @include('admin.common.message')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th>Name</th>
                        <th scope="col">from</th>
                        <th scope="col">to</th>
                        <th>Purpose</th>
                        <th>Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($leaves as $k=>$item)
                    <tr>
                        <th scope="row">{{$k+1}}</th>
                        <th>{{$item->user->name}}</th>
                        <td>{{$item->from}}</td>
                        <td>{{$item->to}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            @if($item->status==0)
                                <span class="alert alert-danger">Pending</span>
                            @else
                                <span class="alert alert-success">Approve</span>
                            @endif


                        </td>
                        <td>
                            <a href="{{route('leaves.edit',$item->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('leaves.destroy',$item->id)}}" class="btn btn-danger">Delete</a>
                            <a class="btn btn-primary" style="color:#fff" data-toggle="modal" data-target="#exampleModal{{$item->id}}">Approve/reject</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('leaves.status',$item->id)}}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="0">Reject</option>
                                                <option value="1">Approve</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <textarea name="message" id="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" onclick="" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
