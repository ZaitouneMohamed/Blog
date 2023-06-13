<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('dashboards/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    @yield('head_links')
    @yield('style')
    @livewireStyles

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('dashboards/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}

                        {{-- <i class="far fa-comments"></i> --}}
                        {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{route('admin.profile')}}" class="dropdown-item text-center">
                            profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item text-center">
                            Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('dashboards//adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dashboards//adminlte/dist/img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.posts.index') }}" class="nav-link">
                                <i class="fa-sharp fa-solid fa-blog"></i>
                                <p>
                                    posts
                                    <span class="right badge badge-success">{{ App\Models\Posts::count() }}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories') }}" class="nav-link">
                                <i class="fa-solid fa-bars"></i>
                                <p>
                                    categories
                                    <span class="right badge badge-success">
                                        {{ \App\Models\Categorie::all()->count() }}
                                    </span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tags') }}" class="nav-link">
                                <i class="fa-solid fa-tag"></i>
                                <p>
                                    tags
                                    <span class="right badge badge-success">
                                        {{ \App\Models\Tags::all()->count() }}
                                    </span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users') }}" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <p>
                                    all users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.RolesList') }}" class="nav-link">
                                <i class="fa-solid fa-ruler"></i>
                                <p>
                                    roles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.PermissionsList') }}" class="nav-link">
                                <i class="fa-regular fa-universal-access"></i>
                                <p>
                                    permissions
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
        <!-- REQUIRED SCRIPTS -->
        @yield('scripts')
        <!-- jQuery -->
        @livewireScripts
        <script src="{{ asset('dashboards/adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboards/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboards/adminlte/dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dashboards/adminlte/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('dashboards/adminlte/dist/js/demo.js') }}"></script>
        <script src="{{ asset('dashboards/adminlte/dist/js/pages/dashboard3.js') }}"></script>


</body>

</html>
