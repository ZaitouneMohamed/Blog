@extends("landing.layouts.master")

@section("content")
<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <article class="post">

                            <div class="post-header mb-5 text-center">
                                <div class="meta-cat">
                                    <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                        href="{{route('posts_of_categorie',$post->categorie->name)}}">{{$post->categorie->name}}</a>
                                </div>
                                <h2 class="post-title mt-2">
                                    {{$post->title}}
                                </h2>

                                <div class="post-meta">
                                    <a href="{{ route('user_profile',$post->user->id) }}" class="text-uppercase font-sm letter-spacing-1 mr-3">by {{$post->user->name}}</a>
                                    <span class="text-uppercase font-sm letter-spacing-1">{{$post->created_at->format('F d , Y ')}}</span>
                                </div>
                            </div>

                            <div class="post-img mb-4">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/posts') }}/{{$post->image}}" alt=""></a>
                            </div>

                            <div class="post-body">
                                <div class="entry-content">
                                    {!! html_entity_decode($post->body) !!}
                                </div>

                                <div class="post-tags py-4">
                                    @foreach ($post->tags as $tag)
                                        <a href="{{route('posts_of_tag',$tag->name)}}">#{{$tag->name}}</a>
                                    @endforeach
                                </div>


                                <div
                                    class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                                    <span class="single-comment-o"><i class="fa fa-comment-o"></i>{{$post->comments->count()}} comment</span>
{{--
                                    <div class="post-share">
                                        <span class="count-number-like">2</span>
                                        <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
                                    </div> --}}

                                    <div class="list-posts-share">
                                        <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                                        <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                                        <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                                        <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <nav class="post-pagination clearfix border-top border-bottom py-4">
                    <div class="prev-post">
                        @if ($previous)
                            <a href="{{route('post.show',$previous)}}">
                                <span class="text-uppercase font-sm letter-spacing">Previous</span>
                                <h4 class="mt-3">{{$previous->title}}</h4>
                            </a>
                        @endif
                    </div>
                    <div class="next-post">
                        @if ($next)
                            <a href="{{route('post.show',$next)}}">
                                <span class="text-uppercase font-sm letter-spacing">Next</span>
                                <h4 class="mt-3"> {{$next->title}} </h4>
                            </a>
                        @endif
                    </div>
                </nav>
                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">
                        You May Also Like
                    </h3>
                    <div class="row">
                        @foreach (\App\Models\Posts::orderBy("views","desc")->where('id','!=',$post->id)->get()->take(3) as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a href="{{route('post.show',$item)}}">
                                        <img class="img-fluid" src="{{ asset('assets/posts') }}/{{$item->image}}" alt="post-thumbnail" />
                                    </a>
                                    <div class="post-content mt-3">
                                        <h5>
                                            <a href="{{route('post.show',$item)}}">{{$item->title}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="comment-area my-5">
                    <h3 class="mb-4 text-center">{{$post->comments->count()}} Comments</h3>
                    @foreach ($post->comments as $item)
                        <div class="comment-area-box media">
                            <img alt="" src="{{ asset('storage') }}/{{ $item->user->image }}" width="50px" style="border-radius: 50%" class="img-fluid float-left mr-3 mt-2">
                            <div class="media-body ml-4">
                                <h4 class="mb-0">{{$item->user->name}} </h4>
                                <span class="date-comm font-sm text-capitalize text-color"><i
                                        class="ti-time mr-2"></i>{{$item->created_at}} </span>
                                        @auth
                                            @if (auth()->user()->hasRole('admin') || auth()->user()->id == $item->user_id )
                                                <a href="{{route('deleteComment',$item->id)}}"><i
                                                    class="ti-time mr-2"></i></a>
                                            @endif
                                        @endauth
                                <div class="comment-content mt-3">
                                    <p>{{$item->body}}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @auth
                    @can("comment")
                        <form class="comment-form mb-5 gray-bg p-5" id="comment-form" action="{{route('addcomment',$post->id)}}" method="POST">
                            @csrf
                            @method("get")
                            <h3 class="mb-4 text-center">Leave a comment</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                        placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
                                value="Submit Comment">
                        </form>
                    @endcan
                @endauth
                @guest
                    <div class="sidebar-widget subscribe mb-5">
                            <h4 class="text-center widget-title">please login to Add Comment </h4>
                            <a href="/login" class="btn btn-primary d-block mt-3">Sign Up</a>
                        </div>
                @endguest

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">
                        {{-- <div class="sidebar-widget about mb-5 text-center p-3">
                            <div class="about-author">
                                <img src="images/author.jpg" alt="" class="img-fluid">
                            </div>
                            <h4 class="mb-0 mt-4">Liam Mason</h4>
                            <p>Travel Blogger</p>
                            <p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my
                                journey on this blog!</p>
                            <img src="images/liammason.png" alt="" class="img-fluid">
                        </div>

                        <div class="sidebar-widget follow mb-5 text-center">
                            <h4 class="text-center widget-title">Follow Me</h4>
                            <div class="follow-socials">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-youtube"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div> --}}

                        @include("posts.trending")
                        @include("posts.categories")

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
