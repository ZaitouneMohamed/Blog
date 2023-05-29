@extends("landing.layouts.master")

@section('content')
    <div class="container">
        <h1 class="text text-center">Add New post</h1>
        <form action="{{ route('MyPosts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title :</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">body :</label>
                <textarea class="form-control" id="body" placeholder="Enter the Description" name="body">{{$post->body}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image :</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categorie :</label>
                <select name="categorie_id">
                    @foreach (\App\Models\Categorie::all() as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tags :</label>
                @foreach (\App\Models\Tags::all() as $tag)
                    <input class="form-check-input mx-4" type="checkbox" id="customCheckbox1" name="tags[]"
                        value="{{ $tag->id }}">
                    {{ $tag->name }}
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
@endsection
@section('styles')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
