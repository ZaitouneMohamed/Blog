<?php

namespace App\Http\Livewire\Admin;

use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Convertations extends Component
{
    public function render()
    {
        return view('livewire.admin.convertations');
    }
    public $conversations;

    public function mount()
    {
        $conversations = Conversation::where('receiver_id', Auth::user()->id)->orWhere('sender_id', Auth::user()->id)->get();
        $this->conversations = $conversations;
    }

    public $selectedConversationId;

    public function selectConversation($conversationId)
    {
        $this->selectedConversationId = $conversationId;
        $this->emit('AdminconversationSelected', $conversationId);
    }
}
