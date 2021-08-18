@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add</div>
                    <div class="card-body">
                        <form action="{{route('notices.store')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input value="{{auth()->user()->name}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
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
                            <label for="">title</label>
                            <input type="text"  name="title" class="form-control @error('title') is-invalid @enderror" >
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <input type="text"  name="description" class="form-control @error('description') is-invalid @enderror" >
                            @error('description')
                            <span class="invalid-feedback" role="alert">
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
