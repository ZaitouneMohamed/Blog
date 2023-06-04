@extends('landing.layouts.master')

@section('content')
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
                </div>
            </div>
        </div>
    </section>
@endsection
