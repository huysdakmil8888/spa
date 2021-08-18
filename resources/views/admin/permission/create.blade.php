@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add</div>
                    <div class="card-body">
                        <form action="{{route('permissions.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role_id" id="" class="form-control  @error('role_id') is-invalid @enderror">
                                    @foreach(App\Role::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
                                            <td><input type="checkbox" value="1" name="name[department][can-add]"></td>
                                            <td><input type="checkbox" value="1" name="name[department][can-edit]"></td>
                                            <td><input type="checkbox" value="1" name="name[department][can-view]"></td>
                                            <td><input type="checkbox" value="1" name="name[department][can-delete]"></td>
                                            <td><input type="checkbox" value="1" name="name[department][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">role</th>
                                            <td><input type="checkbox" value="1" name="name[role][can-add]"></td>
                                            <td><input type="checkbox" value="1" name="name[role][can-edit]"></td>
                                            <td><input type="checkbox" value="1" name="name[role][can-view]"></td>
                                            <td><input type="checkbox" value="1" name="name[role][can-delete]"></td>
                                            <td><input type="checkbox" value="1" name="name[role][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">user</th>
                                            <td><input type="checkbox" value="1" name="name[user][can-add]"></td>
                                            <td><input type="checkbox" value="1" name="name[user][can-edit]"></td>
                                            <td><input type="checkbox" value="1" name="name[user][can-view]"></td>
                                            <td><input type="checkbox" value="1" name="name[user][can-delete]"></td>
                                            <td><input type="checkbox" value="1" name="name[user][can-list]"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">permission</th>
                                            <td><input type="checkbox" value="1" name="name[permission][can-add]"></td>
                                            <td><input type="checkbox" value="1" name="name[permission][can-edit]"></td>
                                            <td><input type="checkbox" value="1" name="name[permission][can-view]"></td>
                                            <td><input type="checkbox" value="1" name="name[permission][can-delete]"></td>
                                            <td><input type="checkbox" value="1" name="name[permission][can-list]"></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
