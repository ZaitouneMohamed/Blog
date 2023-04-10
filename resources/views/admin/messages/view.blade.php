@extends("admin.master.master")

@section("content")
    <h1>username :{{$message->name}} </h1>
    <h1>email :{{$message->email}} </h1>
    <h1>content :{{$message->content}} </h1>
    <h1>At :{{$message->created_at}} </h1>
@endsection