<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($this->Tags as $tag)
            <tr>
                <th scope="row">{{$tag->id}}</th>
                <td>{{$tag->name}}</td>
                <td>
                    @if ($tag->posts->count() == 0)
                        <button class="btn btn-danger" wire:click="delete({{$tag->id}})">delete</button>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>