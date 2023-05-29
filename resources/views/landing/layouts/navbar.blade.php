@include('landing.auth.login')
@include('landing.auth.register')

<header class="header-top bg-grey justify-content-center">
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
            <a class="navbar-brand d-lg-none"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul id="menu" class="menu navbar-nav ">
                    <li class="nav-item"><a href="/" class="nav-link">home</a></li>
                    <li class="nav-item"><a href="{{ route('posts_list') }}" class="nav-link">Post Lists</a></li>
                    <li class="nav-item dropdown  pl-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach (\App\Models\Categorie::all() as $item)
                                <a class="dropdown-item"
                                    href="{{ route('posts_of_categorie', $item) }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    <li class="nav-item dropdown  pl-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tags
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach (\App\Models\Tags::all() as $item)
                                <a class="dropdown-item"
                                    href="{{ route('posts_of_tag', $item) }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    @guest
                        <li class="nav-item"><a data-bs-toggle="modal" class="nav-link"
                                data-bs-target="#registerForm">Register</a></li>
                        <li class="nav-item"><a data-bs-toggle="modal" class="nav-link"
                                data-bs-target="#loginForm">login</a></li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown  pl-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/chat">chat</a>
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <a class="dropdown-item" href="/MyPosts">my posts</a>
                                <a class="dropdown-item" href="/logout">Log Out</a>
                            </div>
                        </li>
                    @endauth
                    <li class="nav-item d-lg-none">
                        <div class="search_toggle p-3 d-inline-block bg-white"><i class="ti-search"></i></div>
                    </li>
                </ul>
            </div>

            <div class="text-right search d-none d-lg-block">
                <div class="search_toggle"><i class="ti-search"></i></div>
            </div>
        </div>
    </nav>

</header>

<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..." />
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('message'))
    <div class="alert alert-warning">
        {{ session()->get('message') }}
    </div>
@endif
