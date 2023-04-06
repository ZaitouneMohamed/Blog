@extends("landing.layouts.master")

@section("content")
<section class="section-padding">
    <div class="container">
        <div class="row">
            @foreach (\App\Models\Posts::where('prenium',1)->paginate(3) as $item)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{route('post.show',$item)}}"><img src="{{$item->image}}" alt="" class="img-fluid w-100"></a>
                        </div>
                        <div class="content">
                            <a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra">{{$item->categorie->name}}</a>
                            <h4><a href="blog-single.html">{{$item->created_at->format('F d , Y ')}}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-home py-4 px-4 mb-5 bg-grey">
                    <div class="form-group row align-items-center mb-0">
                        <label for="colFormLabel" class="col-form-label col-sm-12 h4 col-lg-4">Subscribe for Newsletter</label>
                        <div class="col-sm-6 col-lg-3">
                            <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel" placeholder="Full Name">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel2" placeholder="Email Address">
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-dark">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        @foreach (\App\Models\Posts::orderBy("id","desc")->get()->take(4) as $item)
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="{{route('post.show',$item)}}">
                                    <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                                </a>
                                <span class="letter-spacing cat-name font-extra text-uppercase font-sm text-color ">{{$item->categorie->name}}</span>
                                <h3 class="post-title mt-1"><a href="{{route('post.show',$item)}}">{{$item->title}}-{{$item->tags->count()}}</a></h3>

                                <span class="text-muted letter-spacing text-uppercase font-sm">{{$item->created_at->format('F d , Y ')}}</span>
                                <div class="post-content mt-4">
                                    <p>
                                        {{ Str::limit($item->title, 50, '...') }}
                                    </p>

                                    <a class="btn btn-grey mt-3"> read more</a>
                                </div>
                            </article>
                        @endforeach
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6">
                        @foreach (\App\Models\Posts::all()->take(3) as $item)
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="{{route('post.show',$item)}}">
                                    <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                                </a>
                                <span class="letter-spacing cat-name font-extra text-uppercase font-sm text-color ">{{$item->categorie->name}}</span>
                                <h3 class="post-title mt-1"><a href="{{route('post.show',$item)}}">{{$item->title}}</a></h3>

                                <span class="text-muted letter-spacing text-uppercase font-sm">{{$item->created_at->format('F d , Y ')}}</span>
                                <div class="post-content mt-4">
                                    <p>
                                        {{ Str::limit($item->title, 50, '...') }}
                                    </p>
                                    <a class="btn btn-grey mt-3"> read more</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <div class="pagination mt-5 pt-4">
                    <a class="btn btn-success mt-3" style="color: white"> read more</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">
                        <div class="sidebar-widget about mb-5 text-center p-3">
                            <div class="about-author">
                                <img src="assets/images/author.jpg" alt="" class="img-fluid">
                            </div>
                            <h4 class="mb-0 mt-4">Liam Mason</h4>
                            <p>Travel Blogger</p>
                            <p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my journey on this
                                blog!</p>
                            <img src="assets/images/liammason.png" alt="" class="img-fluid">
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
                        </div>

                        <div class="sidebar-widget mb-5 ">
                            <h4 class="text-center widget-title">Trending Posts</h4>
                            @foreach (\App\Models\Posts::orderBy("views","desc")->get()->where('published',1)->take(3) as $item)
                                <div class="media border-bottom py-3 sidebar-post-item">
                                    <a href="{{route('post.show',$item)}}"><img class="mr-4" src="{{$item->image}}" alt=""></a>
                                    <div class="media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">{{$item->created_at->format('F d , Y ')}}</span>
                                        <h4><a href="{{route('post.show',$item)}}">{{$item->title}}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="sidebar-widget category mb-5">
                            <h4 class="text-center widget-title">Catgeories</h4>
                            <ul class="list-unstyled">
                                @foreach (\App\Models\Categorie::all()->take(5) as $item)
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="{{route('posts_of_categorie',$item->name)}}">{{$item->name}}</a>
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