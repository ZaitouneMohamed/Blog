<div class="card-body p-0">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="update">
        <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <input type="text" wire:model="website" placeholder="your website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <input type="text" wire:model="github" placeholder="github account" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <input type="text" wire:model="twitter" placeholder="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <input type="text" wire:model="facebook" placeholder="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </li>
            <button type="submit" class="btn btn-primary">submit</button>
        </ul>
    </form>

</div>
