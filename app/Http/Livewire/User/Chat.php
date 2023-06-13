<?php

namespace App\Http\Livewire\User;

use App\Models\Chat as ModelsChat;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        $messages = ModelsChat::where('conversation_id', $this->selectedConversationId)->get();

        return view('livewire.user.chat',[
            "messages" => $messages
        ]);
    }
    public $selectedConversationId, $body;

    protected $listeners = [
        'conversationSelected' => 'showMessages',
    ];

    public function showMessages($conversationId)
    {
        $this->selectedConversationId = $conversationId;
    }

    public function sendMessage()
    {
        $conversation = Conversation::find($this->selectedConversationId);
        if ($conversation->sender_id === Auth()->user()->id) {
            $receiver_id = Auth()->user()->id;
        } else {
            $receiver_id = $conversation->receiver_id;
        }

        ModelsChat::create([
            'conversation_id' => $this->selectedConversationId,
            'sender_id' => auth()->id(),
            'receiver_id' => $receiver_id,
            'message' => $this->body,
        ]);
        $this->body = "";
    }
}
