<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'conversation_id',
        'receiver_id',
        'message',
        'statue'
    ];

    // relations 

    public function Convertations()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class , 'sender_id');
    }
    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->diffForHumans();
    }
}
