@extends("landing.layouts.master")

@section("content")
    {{-- <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">{{$categorie->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-lg-6 col-md-6">
                        <article class="post-grid mb-5">
                            <div class="post-thumb mb-4">
                                <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                            </div>
                            <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{$item->categorie->name}}</span>
                            <h3 class="post-title mt-1"><a href="{{route('post.show',$item)}}">{{$item->title}}</a></h3>
                            <span class=" text-muted  text-capitalize">{{$item->created_at->format('F d , Y ')}}</span>
                            
                        </article>
                    </div>
                @endforeach
    </div>
    <div class="container">
        {{$posts->links()}}
    </div> --}}
    
                {{-- </div> --}}
    
        <div class="sidebar-widget sidebar-adv mb-5">
            <a href="#"><img src="{{ asset('assets/images/sidebar-banner3.png') }}" alt="" class="img-fluid w-100"></a>
        </div>
    
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{--  --}}
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">{{$categorie->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($posts as $item )
                            <div class="col-lg-6 col-md-6">
                                <article class="post-grid mb-5">
                                    <div class="post-thumb mb-4">
                                        <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                                    </div>
                                    <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{$item->categorie->name}}</span>
                                    <h3 class="post-title mt-1"><a href="{{route('post.show',$item)}}">{{$item->title}}</a></h3>
                        
                                    <span class=" text-muted  text-capitalize">{{$item->created_at->format('F d , Y ')}}</span>
                                    
                                </article>
                            </div>
                        @endforeach
    </div>
    
                    <div class="">
                        {{$posts->links()}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
    
        <div class="sidebar-widget follow mb-5 text-center">
            <h4 class="text-center widget-title">Follow Me</h4>
            <div class="follow-socials">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#" ><i class="ti-twitter"></i></a>
                <a href="#" ><i class="ti-instagram"></i></a>
                <a href="#"><i class="ti-youtube"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
            </div>
        </div>
        @include("posts.trending")
        @include("posts.categories")
    
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection