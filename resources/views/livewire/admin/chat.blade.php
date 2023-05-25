<div class="direct-chat-messages">
    <!-- Message. Default to the left -->
    @if ($selectedConversationId)
        @if ($messages->count() != 0)
            @foreach ($messages as $item)
                <div class="direct-chat-msg
                @if ($item->sender_id != auth()->user()->id)
                    right
                @endif
                ">
                    <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{ asset('dashboards/adminlte/dist/img/user1-128x128.jpg') }}"
                        alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        {{ $item->message }}
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
            @endforeach
        @else
            <p>no messages in this selected</p>
        @endif
    @else
        <p>no conversation selected</p>
    @endif

    <!-- /.direct-chat-msg -->

    <!-- Message to the right -->
    {{-- <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">Sarah Bullock</span>
            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="{{ asset('dashboards/adminlte/dist/img/user1-128x128.jpg') }}" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
            You better believe it!
        </div>
        <!-- /.direct-chat-text -->
    </div> --}}
    <!-- /.direct-chat-msg -->


</div>
