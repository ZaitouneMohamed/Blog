<div class="card mb-4">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
            </div>
            <div class="col-sm-9">
                <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
                <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Phone</p>
            </div>
            <div class="col-sm-9">
                <input type="text" placeholder="phone number" wire:model="phone"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
                <input type="text" placeholder="adresse" wire:model="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <button wire:click="update" class="btn btn-primary">submit</button>
    </div>
</div>
