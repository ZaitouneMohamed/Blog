<div class="container-fluid" x-data="{ open: false }" wire:poll.750ms>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" style="margin-right: 5px" @click="open = false">show table</button>
                <button class="btn btn-primary" @click="open = true">show form</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive" x-show="!open">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Posts</th>
                            <th>roles</th>
                            <th>permissions</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->Posts->count() }}</td>
                                <td>
                                    @if ($item->roles)
                                        @foreach ($item->roles as $role)
                                            <button
                                                @if ($role->name == 'admin') class="badge badge-success"
                                            @else
                                                class="badge badge-primary" @endif>{{ $role->name }}</button>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    {{ $item->permissions->count() }}
                                </td>
                                <td>
                                    {{-- <div class="d-flex"> --}}
                                        @if ($item->posts->count() == 0)
                                        <button class="btn btn-danger" wire:click="delete({{ $item->id }})">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        @endif
                                        <a href="{{ route('admin.user.profile', ['id' => $item->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    {{-- </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$this->users->links()}} --}}
            </div>
            <div x-show="open" x-transition>
                <h1 class="text text-center">Add new User</h1>
                <form wire:submit.prevent="AddUser">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">name :</label>
                        <input type="text" class="form-control" wire:model="name" placeholder="username">
                        @error('name')
                            <span class="test text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email :</label>
                        <input type="email" class="form-control" wire:model="email" placeholder="email">
                        @error('email')
                            <span class="test text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">password :</label>
                        <input type="text" class="form-control" wire:model="password" placeholder="password">
                        @error('password')
                            <span class="test text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Role :</label>
                        <select class="form-select" aria-label="Default select example" wire:model="role">
                            <option selected>Open this select menu</option>
                            @foreach ($this->Roles as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="test text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" @click="open = false">Add Acount</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
