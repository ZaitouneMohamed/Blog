<?php

namespace App\Http\Livewire\Admin;

use App\Models\Chat as ModelsChat;
use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        $messages = ModelsChat::where('conversation_id', $this->selectedConversationId)->get(); 
        return view('livewire.admin.chat',[
            "messages" => $messages
        ]);
    }
    public $selectedConversationId, $body;

    protected $listeners = [
        'AdminconversationSelected' => 'showMessages',
    ];

    public function showMessages($conversationId)
    {
        $this->selectedConversationId = $conversationId;
    }

    public function sendMessage()
    {
        // $this->validate();
        ModelsChat::create([
            'conversation_id' => $this->selectedConversationId,
            'sender_id' => auth()->id(),
            'receiver_id' => 2,
            'message' => $this->body,
        ]);
        $this->body = "";
    }
}
