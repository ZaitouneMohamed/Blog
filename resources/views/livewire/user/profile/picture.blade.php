<div class="card mb-4">
    <div class="card-body text-center">
        <form wire:submit.prevent="save">
            @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" alt="avatar" class="rounded-circle img-fluid"
                    style="width: 150px;">
                    <div wire:loading wire:target="photo">Uploading...</div>
            @else
                <img src="{{ asset('storage') }}/{{ Auth::user()->image }}" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
            @endif
            <h5 class="my-3">{{ Auth::user()->name }}</h5>
            <div wire:loading wire:target="photo">Uploading...</div>
            <input class="form-control" type="file" id="formFile" wire:model="photo"><br>
            @error('photo') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
</div>
