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
                                        href="#">{{$post->categorie->name}}</a>
                                </div>
                                <h2 class="post-title mt-2">
                                    {{$post->title}}
                                </h2>

                                <div class="post-meta">
                                    <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{$post->user->name}}</span>
                                    <span class="text-uppercase font-sm letter-spacing-1">{{$post->created_at->format('F d , Y ')}}</span>
                                </div>
                            </div>

                            <div class="post-img mb-4">
                                <a href="#"><img class="img-fluid" src="images/fashion/bg-banner-2.jpg" alt=""></a>
                            </div>

                            <div class="post-body">
                                <div class="entry-content">
                                    <p> It was a cheerful prospect. I asked Perry what he thought about it; but he
                                        only shrugged his shoulders and continued a longwinded prayer he had been at
                                        for some time. He was wont to say that the only redeeming feature of our
                                        captivity was the ample time it gave him for the improvisation of prayers—it
                                        was becoming an obsession with him.</p>
                                    <h2 class="mt-4 mb-3">Perfect design & code delivered to you</h2>
                                    <p> The Sagoths had begun to take notice of his habit of declaiming throughout
                                        entire marches. One of them asked him what he was saying—to whom he was
                                        talking. The question gave me an idea, so I answered quickly before Perry
                                        could say anything.</p>
                                    <blockquote>
                                        <i class="ti-quote-left mr-2"></i>A wise girls knows her limit to touch the
                                        sky.Repellat sapiente neque iusto praesentium adipisci.The question gave me
                                        an idea, so I answered quickly before Perry could say anything.<i
                                            class="ti-quote-right ml-2"></i>
                                    </blockquote>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="images/fashion/single-img1.png" alt="post-img"
                                                class="img-fluid mr-4 w-100">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <img src="images/fashion/single-img2.png" alt="post-img"
                                                class="img-fluid mr-4 w-100">
                                        </div>
                                    </div>
                                    <h3 class="mt-5 mb-3">Enjoying the view of summer</h3>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cum delectus
                                        exercitationem
                                        natus quidem enim error suscipit. Iure cupiditate nobis quaerat consectetur!
                                        Vero aliquam,
                                        amet ipsum ullam reiciendis nostrum voluptate accusantium provident ut
                                        blanditiis incidunt. </p>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ab
                                        ratione animi nobis in et consequatur
                                        earum modi repellendus, qui, non debitis pariatur tempora consequuntur!</p>
                                </div>

                                <div class="post-tags py-4">
                                    @foreach ($post->tags as $tag)
                                        <a href="#">#{{$tag->name}}</a>
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
                        @foreach (\App\Models\Posts::orderBy("views","desc")->get()->take(3) as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a href="{{route('post.show',$item)}}">
                                        <img class="img-fluid" src="{{$item->image}}" alt="post-thumbnail" />
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
                            <img alt="" src="{{ asset('assets/images/blog-user-2.jpg') }}" style="border-radius: 50%" class="img-fluid float-left mr-3 mt-2">
                            <div class="media-body ml-4">
                                <h4 class="mb-0">{{$item->user->name}} </h4>
                                <span class="date-comm font-sm text-capitalize text-color"><i
                                        class="ti-time mr-2"></i>{{$item->created_at}} </span>
                                <div class="comment-content mt-3">
                                    <p>{{$item->body}}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @auth
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
                            value="Submit Message">
                    </form>
                @endauth
                @guest
                    <div class="sidebar-widget subscribe mb-5">
                            <h4 class="text-center widget-title">Newsletter</h4>
                            <input type="text" class="form-control" placeholder="Email Address">
                            <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
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

                        <div class="sidebar-widget mb-5 ">
                            <h4 class="text-center widget-title">Trending Posts</h4>

                            @foreach (\App\Models\Posts::orderBy("views","desc")->get()->where('published',1)->take(3) as $item)
                                <div class="media py-3 sidebar-post-item">
                                    <a href="{{route('post.show',$item)}}"><img class="mr-4" src="{{$item->image}}" alt=""></a>
                                    <div class="media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">{{$item->created_at->format('F d , Y ')}}</span>
                                        <h4><a href="blog-single.html">{{$item->slug}}</a></h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                        <div class="sidebar-widget category mb-5">
                            <h4 class="text-center widget-title">Catgeories</h4>
                            <ul class="list-unstyled">
                                @foreach (\App\Models\Categorie::all()->take(5) as $item)
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">{{$item->name}}</a>
                                        <span>{{$item->posts->count()}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-widget subscribe mb-5">
                            <h4 class="text-center widget-title">Newsletter</h4>
                            <input type="text" class="form-control" placeholder="Email Address">
                            <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
                        </div>

                        <div class="sidebar-widget sidebar-adv mb-5">
                            <a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection