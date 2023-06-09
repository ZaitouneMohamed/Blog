<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts List</h6>
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger"><a href="{{ route('admin.posts.create') }}" style="color: white">Add New
                        Post</a></button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>slug</th>
                            <th>body</th>
                            <th>prenium</th>
                            <th>published</th>
                            <th>image</th>
                            <th>user</th>
                            <th>categorie</th>
                            <th>tags</th>
                            <th>view</th>
                            <th>comments</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->Posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ Str::limit($item->title, 20, '...') }}</td>
                                <td>{{ Str::limit($item->slug, 20, '...') }}</td>
                                <td>{!! html_entity_decode(Str::limit($item->body, 20, '...')) !!}</td>
                                <td>
                                    @if ($item->prenium == 1)
                                        <button class="btn btn-success"
                                            wire:click="TooglePrenium({{ $item->id }})">prenium</button>
                                    @else
                                        <button class="btn btn-danger"
                                            wire:click="TooglePrenium({{ $item->id }})">not prenium</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->published == 1)
                                        <button class="btn btn-success"
                                            wire:click="TooglePublish({{ $item->id }})">published</button>
                                    @else
                                        <button class="btn btn-danger"
                                            wire:click="TooglePublish({{ $item->id }})">unpublished</button>
                                    @endif
                                </td>
                                <td><img src="{{ asset('assets/posts') }}/{{ $item->image }}" width="80"
                                        height="80px" alt=""></td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->categorie->name }}</td>
                                <td class="d-flex">
                                    @foreach ($item->tags as $tag)
                                        <button
                                            wire:click="removetagfrompost({{ $tag->id }},{{ $item->id }})"
                                            class="badge badge-secondary">
                                            {{ $tag->name }}
                                        </button>
                                    @endforeach
                                </td>
                                <td>{{ $item->views }}</td>
                                <td>{{ $item->comments->count() }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                                wire:click="delete({{ $item->id }})">Delete</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.posts.edit', $item->id) }}">edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container">
                    {{ $this->Posts->links() }}
                </div>
            </div>

        </div>
    </div>

</div>
