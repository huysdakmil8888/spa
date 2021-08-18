@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert alert-warning">
                        Send Mail
                        @include('admin.common.message')
                    </div>

                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{url('mail/store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Select</label>
                                <select name="mail" id="mail" class="form-control">
                                    <option value="0">mail to all staff</option>
                                    <option value="1">Choose department</option>
                                    <option value="2">Choose person</option>
                                </select>
                                <br>
                                <select name="department" id="department" class="form-control">
                                    <option value="">select department</option>
                                @foreach(App\Department::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <select name="user" id="user" class="form-control">
                                    <option value="">select user</option>

                                @foreach(App\User::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea name="body" id="" cols="10" class="form-control" rows="5">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="">file</label>
                                <input type="file" name="file" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="send mail">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    #department,#user{
        display: none;
    }
</style>
