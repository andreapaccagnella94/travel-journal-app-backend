<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // per far funzionare Tag::Create e Tag::update
    protected $fillable = [
        'name',
        'color',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
