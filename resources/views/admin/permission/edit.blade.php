@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">update</div>
                    @include('admin.common.message')
                    <div class="card-body">
                        <form action="{{route('permissions.update',$permission->id)}}" method="post">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="">Role</label>
                               <h5>{{$permission->role->name}}</h5>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="card">
                            <div class="card-header">Permission</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">Permission</th>
                                            <th scope="col">Can Add</th>
                                            <th scope="col">Can Edit</th>
                                            <th scope="col">Can View</th>
                                            <th scope="col">Can Delete</th>
                                            <th scope="col">Can list</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">department</th>
                                            <td><input @if(isset($permission['name']['department']['can-add'])) checked @endif  type="checkbox" value="1" name="name[department][can-add]"></td>
                                            <td><input @if(isset($permission['name']['department']['can-edit'])) checked @endif type="checkbox" value="1" name="name[department][can-edit]"></td>
                                            <td><input @if(isset($permission['name']['department']['can-view'])) checked @endif type="checkbox" value="1" name="name[department][can-view]"></td>
                                            <td><input @if(isset($permission['name']['department']['can-delete'])) checked @endif type="checkbox" value="1" name="name[department][can-delete]"></td>
                                            <td><input @if(isset($permission['name']['department']['can-list'])) checked @endif type="checkbox" value="1" name="name[department][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">role</th>
                                            <td><input @if(isset($permission['name']['role']['can-add'])) checked @endif type="checkbox" value="1" name="name[role][can-add]"></td>
                                            <td><input @if(isset($permission['name']['role']['can-edit'])) checked @endif type="checkbox" value="1" name="name[role][can-edit]"></td>
                                            <td><input @if(isset($permission['name']['role']['can-view'])) checked @endif type="checkbox" value="1" name="name[role][can-view]"></td>
                                            <td><input @if(isset($permission['name']['role']['can-delete'])) checked @endif type="checkbox" value="1" name="name[role][can-delete]"></td>
                                            <td><input @if(isset($permission['name']['role']['can-list'])) checked @endif type="checkbox" value="1" name="name[role][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">user</th>
                                            <td><input @if(isset($permission['name']['user']['can-add'])) checked @endif type="checkbox" value="1" name="name[user][can-add]"></td>
                                            <td><input @if(isset($permission['name']['user']['can-edit'])) checked @endif type="checkbox" value="1" name="name[user][can-edit]"></td>
                                            <td><input @if(isset($permission['name']['user']['can-view'])) checked @endif type="checkbox" value="1" name="name[user][can-view]"></td>
                                            <td><input @if(isset($permission['name']['user']['can-delete'])) checked @endif type="checkbox" value="1" name="name[user][can-delete]"></td>
                                            <td><input @if(isset($permission['name']['user']['can-list'])) checked @endif type="checkbox" value="1" name="name[user][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">permission</th>
                                            <td><input @if(isset($permission['name']['permission']['can-add'])) checked @endif type="checkbox" value="1" name="name[permission][can-add]"></td>
                                            <td><input @if(isset($permission['name']['permission']['can-edit'])) checked @endif type="checkbox" value="1" name="name[permission][can-edit]"></td>
                                            <td><input @if(isset($permission['name']['permission']['can-view'])) checked @endif type="checkbox" value="1" name="name[permission][can-view]"></td>
                                            <td><input @if(isset($permission['name']['permission']['can-delete'])) checked @endif type="checkbox" value="1" name="name[permission][can-delete]"></td>
                                            <td><input @if(isset($permission['name']['permission']['can-list'])) checked @endif type="checkbox" value="1" name="name[permission][can-list]"></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input @if(isset($permission['name']['department']['can-add'])) checked @endif type="submit" value="update" class="btn btn-primary">
                        </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
