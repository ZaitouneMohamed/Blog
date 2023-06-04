@extends('admin.master.master')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Roles List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>permissions</th>
                                <th>assign</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @foreach ($item->permissions as $permission)
                                            <form
                                                action="{{ route('admin.RemovePermissionFromRole', ['id' => $item->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="permission" value="{{ $permission->name }}">
                                                <button type="submit"
                                                    class="badge badge-primary">{{ $permission->name }}</button>
                                            </form>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.AssignPermissionToRole', ['id' => $item->id]) }}" method="post">
                                            @csrf
                                            <select class="form-select form-select-sm" name="permission" aria-label=".form-select-sm example">
                                                @foreach ($permissions as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="submit" value="assign" class="btn btn-success">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
