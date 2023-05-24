<div class="card" wire:poll>
    @if ($selectedConversationId)
        @if ($messages->count() != 0)
            <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                    <div class="img_cont">
                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                            class="rounded-circle user_img">
                        <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                        @if (\App\Models\Conversation::find($selectedConversationId)->sender_id === auth()->user()->id)
                            @php
                                $user = \App\Models\Conversation::find($selectedConversationId)->receiver_id;
                            @endphp
                            <span>Chat with {{ \App\Models\User::find($user)->name }} <span>
                        @else
                            @php
                                $user = \App\Models\Conversation::find($selectedConversationId)->sender_id;
                            @endphp
                            <span>Chat with {{ \App\Models\User::find($user)->name }}</span>
                        @endif
                    </div>
                </div>
                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                <div class="action_menu">
                    <ul>
                        <li><i class="fas fa-user-circle"></i> View profile</li>
                        <li><i class="fas fa-users"></i> Add to close friends</li>
                        <li><i class="fas fa-plus"></i> Add to group</li>
                        <li><i class="fas fa-ban"></i> Block</li>
                    </ul>
                </div>
            </div>
            <div class="card-body msg_card_body">
                @foreach ($messages as $item)
                    @if ($item->sender_id != auth()->user()->id)
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                    class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer_send">
                                <span class="msg_time">{{ $item->created_at }}</span>
                                <span>{{ $item->message }}</span>
                            </div>
                        </div>
                    @else
                        <div class="d-flex justify-content-end mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                    class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                <span class="msg_time">{{ $item->created_at }}</span>
                                <span>{{ $item->message }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach

                {{-- <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                        Hi Khalid i am good tnx how about you?
                        <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                </div> --}}
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <textarea wire:model="body" class="form-control type_msg" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                        <span class="input-group-text send_btn" wire:click="sendMessage()"><i
                                class="fas fa-location-arrow"></i></span>
                    </div>
                </div>
            </div>
        @else
            <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                    <div class="img_cont">
                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                            class="rounded-circle user_img">
                        <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                        <span>Chat with Khalidd </span>
                        <p>{{ $selectedConversationId }}</p>
                    </div>
                </div>
                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                <div class="action_menu">
                    <ul>
                        <li><i class="fas fa-user-circle"></i> View profile</li>
                        <li><i class="fas fa-users"></i> Add to close friends</li>
                        <li><i class="fas fa-plus"></i> Add to group</li>
                        <li><i class="fas fa-ban"></i> Block</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-4">
                <div class="container">
                    <p class="text-center text-white">no message here</p>
                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <textarea wire:model="body" class="form-control type_msg" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                        <span class="input-group-text send_btn" wire:click="sendMessage()"><i
                                class="fas fa-location-arrow"></i></span>
                    </div>
                </div>
            </div>
        @endif
    @else
        <p>No conversations available</p>
    @endif

</div>
