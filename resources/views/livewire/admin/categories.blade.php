<div class="container-fluid" x-data="{ open:false }" wire:poll.750ms>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categorie List</h6>
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
                            <th>posts count</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->Categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->posts->count()}}</td>
                                <td>
                                    @if ($item->posts->count() == 0)
                                        <button class="btn btn-danger" wire:click="delete({{$item->id}})">delete</button>
                                    @endif
                                    <button class="btn btn-warning" @click="open = true" wire:click="getCategorie({{$item->id}})">update</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div x-show="open" x-transition>
                <h1 class="text text-center">Add new categorie</h1>
                <form wire:submit.prevent="add">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">name :</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    @if ($editing)
                        <a type="button" wire:click="update()" @click="open = false" class="btn btn-warning">update</a>
                        <a class="btn btn-danger" type="button" wire:click="cancel()">cancel</a>
                    @else
                    <button type="submit" @click="open = false" class="btn btn-primary">submit</button>
                    @endif
                </form>
            </div>
        </div>
    </div>

</div>
