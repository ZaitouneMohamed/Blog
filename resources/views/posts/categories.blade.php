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