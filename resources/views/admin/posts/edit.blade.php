@extends("admin.master.master")

@section("content")
<div>
    <h1 class="text text-center">update post</h1>
    <form action="{{route('admin.posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title :</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">body :</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">
                {{$post->title}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">image :</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categorie :</label>
            <select name="categorie_id">
                @foreach (\App\Models\Categorie::all() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tags :</label>
            @foreach (\App\Models\Tags::all() as $tag)
                <input class="form-check-input mx-4"
                @if ($post->tags->contains($tag->id))
                    checked
                @endif
                type="checkbox" id="customCheckbox1" name="tags[]" value="{{$tag->id}}">
                {{$tag->name}}
            @endforeach
        </div>
            <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection