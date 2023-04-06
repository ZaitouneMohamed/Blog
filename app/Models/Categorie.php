<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}
