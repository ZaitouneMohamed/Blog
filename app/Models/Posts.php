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

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class)->orderBy('created_at','DESC');
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
