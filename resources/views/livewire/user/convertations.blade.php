<ul class="contacts">
    @foreach ($conversations as $item)
        <li wire:click="selectConversation({{ $item->id }})">
            <div class="d-flex bd-highlight">
                <div class="img_cont">
                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                    <span class="online_icon"></span>
                </div>
                <div class="user_info">
                    @if ($item->receiver_id === auth()->user()->id)
                        <span>{{ \App\Models\User::find($item->sender_id)->name }}</span>
                    @else
                        <span>{{ \App\Models\User::find($item->receiver_id)->name }}</span>
                    @endif
                    @if ($item->Messages->count() != 0)
                        <p>{{ Str::limit($item->Messages->last()->message, 10, '...') }}</p>
                    @else
                        <p>No Message</p>
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>
