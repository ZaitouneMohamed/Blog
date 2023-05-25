<ul class="contacts-list">
    <!-- End Contact Item -->
    @foreach ($conversations as $item)
        <li wire:click="selectConversation({{ $item->id }})">
            <a href="#">
                <img class="contacts-list-img" src="{{ asset('dashboards/adminlte/dist/img/user5-128x128.jpg') }}"
                    alt="User Avatar">

                <div class="contacts-list-info">
                    <span class="contacts-list-name">
                        @if ($item->receiver_id === auth()->user()->id)
                            <span>{{ \App\Models\User::find($item->sender_id)->name }}</span>
                        @else
                            <span>{{ \App\Models\User::find($item->receiver_id)->name }}</span>
                        @endif
                        <small class="contacts-list-date float-right">1/4/2015</small>
                    </span>
                    <span class="contacts-list-msg">from livewire...</span>
                </div>
                <!-- /.contacts-list-info -->
            </a>
        </li>
    @endforeach
    <!-- End Contact Item -->
</ul>
<!-- /.contacts-list -->
