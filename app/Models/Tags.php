<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];


    public function tags()
    {
        return $this->belongsToMany(
            Posts::class,
            'tag_id',
            'post_tags',
            'post_id'
        );
    }
}
