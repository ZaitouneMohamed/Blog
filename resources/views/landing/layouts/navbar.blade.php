<div class="header-logo py-5 d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid w-100"></a>
            </div>
        </div>
    </div>
</div>

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
                    <li class="nav-item dropdown  pl-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.html">Dashboard 1</a>
                            <a class="dropdown-item" href="index-2.html">Dashboard 2</a>
                            <a class="dropdown-item" href="index-3.html">Dashboard 3</a>
                            <a class="dropdown-item" href="index-4.html">Dashboard 4</a>
                            <a class="dropdown-item" href="index-5.html">Dashboard 5</a>
                            <a class="dropdown-item" href="index-6.html">Dashboard 6</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Blog Posts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="standard-fullwidth.html">Standard Fullwidth</a>
                            <a class="dropdown-item" href="standard-left-sidebar.html">Standard Left Sidebar</a>
                            <a class="dropdown-item" href="standard-right-sidebar.html">Standard Right Sidebar</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="fashion.html" class="nav-link">Category</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Post Formats
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="post-video.html">Video Formats</a>
                            <a class="dropdown-item" href="post-audio.html">Audio Format</a>
                            <a class="dropdown-item" href="post-link.html">Quote Format</a>
                            <a class="dropdown-item" href="post-gallery.html">Gallery Format</a>
                            <a class="dropdown-item" href="post-image.html">Image Format</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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