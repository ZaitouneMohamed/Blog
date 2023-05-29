@extends('landing.layouts.master')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <a href="{{ route('MyPosts.create') }}" class="center btn btn-primary">create new post</a><br><br>
            </div>
            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-lg-6 col-md-6">
                        <article class="post-grid mb-5">
                            <div class="post-thumb mb-4">
                                <img src="{{ asset('assets/posts') }}/{{ $item->image }}" alt=""
                                    class="img-fluid w-100">
                            </div>
                            <span
                                class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $item->categorie->name }}</span>
                            <h3 class="post-title mt-1"><a href="{{ route('post.show', $item) }}">{{ $item->title }}</a>
                            </h3>
                            <span class="text-muted text-capitalize">{{ $item->created_at->format('F d , Y ') }}</span><br>
                            <span class="text-muted text-capitalize text-center">
                                @if ($item->active == 0)
                                    wait for active
                                @else
                                    wait for active
                                @endif
                            </span>
                        </article>
                        <div class="d-flex">
                            <a href="{{ route('post.show', $item) }}" class="btn btn-success"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('MyPosts.edit', $item->id) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('MyPosts.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure you want do delete this post');"
                                    class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="container">
                {{ $posts->links() }}
            </div>
    </section>
@endsection
