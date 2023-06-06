@extends('admin.master.master')

@section('content')
    {{-- <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <p class="text-muted mb-1">{{ $user->role }}</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0">https://mdbootstrap.com</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">@mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(097) 234-5678</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(098) 765-4321</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">roles
                                            ({{ $user->roles->count() }}) </span>
                                    </p>
                                    <div>
                                        <form action="{{ route('admin.AssignRoleToUser', ['id' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            <select class="form-select" name="role" aria-label="Default select example">
                                                @foreach ($roles as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success">assign role</button>
                                        </form>
                                    </div>
                                    @foreach ($user->roles as $item)
                                        <div class="d-flex">
                                            <form action="{{ route('admin.RemoveRoleFromUser', ['id' => $user->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="role" value="{{ $item->name }}">
                                                <input class="btn btn-danger" type="submit" value="{{ $item->name }}">
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">permissions
                                            ({{ $user->permissions->count() }})</span>
                                    </p>
                                    <div>
                                        <form action="{{ route('admin.AssignPermissionToUser', ['id' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            <select class="form-select" name="permission"
                                                aria-label="Default select example">
                                                @foreach ($permissions as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success">assign permission</button>
                                        </form>
                                    </div>
                                    @foreach ($user->permissions as $item)
                                        <form action="{{ route('admin.RemovePermissionFromUser', ['id' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="role" value="{{ $item->name }}">
                                            <input class="btn btn-warning" type="submit" value="{{ $item->name }}">
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <livewire:user.profile.picture />

                    <div class="card mb-4 mb-lg-0">
                        <livewire:user.profile.links />
                    </div>
                </div>
                <div class="col-lg-8">
                    <livewire:user.profile.info />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">roles
                                            ({{ $user->roles->count() }}) </span>
                                    </p>
                                    <div>
                                        <form action="{{ route('admin.AssignRoleToUser', ['id' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            <select class="form-select" name="role" aria-label="Default select example">
                                                @foreach ($roles as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success">assign role</button>
                                        </form>
                                    </div>
                                    @foreach ($user->roles as $item)
                                        <div class="d-flex">
                                            <form action="{{ route('admin.RemoveRoleFromUser', ['id' => $user->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="role" value="{{ $item->name }}">
                                                <input class="btn btn-danger" type="submit" value="{{ $item->name }}">
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">permissions
                                            ({{ $user->permissions->count() }})</span>
                                    </p>
                                    <div>
                                        <form action="{{ route('admin.AssignPermissionToUser', ['id' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            <select class="form-select" name="permission"
                                                aria-label="Default select example">
                                                @foreach ($permissions as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success">assign permission</button>
                                        </form>
                                    </div>
                                    @foreach ($user->permissions as $item)
                                        <form action="{{ route('admin.RemovePermissionFromUser', ['id' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="role" value="{{ $item->name }}">
                                            <input class="btn btn-warning" type="submit" value="{{ $item->name }}">
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
