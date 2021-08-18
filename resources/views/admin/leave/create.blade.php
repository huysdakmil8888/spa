@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add</div>
                    <div class="card-body">
                        <form action="{{route('leaves.store')}}" method="post">
                            @csrf
                        {{--<div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>--}}
                            <div class="form-group">
                                <label for="">From</label>
                                <input  type="text" id="datepicker1" name="from" class="form-control @error('from') is-invalid @enderror" >
                                @error('from')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="">To</label>
                            <input type="text" id="datepicker" name="to" class="form-control @error('to') is-invalid @enderror" >
                            @error('to')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="sick">Sick</option>
                                <option value="meeting">Meeting</option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" leave="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary">
                        </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
