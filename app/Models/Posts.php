<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'body',
        'prenium',
        'published',
        'user_id',
        'views',
        'categorie_id',
        'image'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(
            Tags::class,
            'post_tags',
            'post_id',
            'tag_id'
        );
    }
}
