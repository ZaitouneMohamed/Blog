<div class="sidebar-widget mb-5 ">
    <h4 class="text-center widget-title">Trending Posts</h4>
    
    @foreach (\App\Models\Posts::orderBy("views","desc")->get()->where('published',1)->take(3) as $item)
        <div class="media border-bottom py-3 sidebar-post-item">
            <a href="{{route('post.show',$item)}}"><img class="mr-4" src="{{ asset('assets/posts') }}/{{$item->image}}" alt=""></a>
            <div class="media-body">
                <span class="text-muted letter-spacing text-uppercase font-sm">{{$item->created_at->format('F d , Y ')}}</span>
                <h4><a href="{{route('post.show',$item)}}">{{$item->title}}</a></h4>
            </div>
        </div>
    @endforeach
</div>