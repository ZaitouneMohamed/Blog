@extends('admin.master.master')

@section("content")
    <div class="table-responsive" x-show="!open">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>content</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{Str::limit($item->content, 10, '...') }}</td>
                        <td>
                            <button class="btn btn-danger">delete</button>
                            <a href="{{route('admin.messages.read',$item->id)}}" class="btn btn-success">view</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        {{$messages->links()}}
    </div>
@endsection