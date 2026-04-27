<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // per far funzionare Post::Create
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location_name',
        'latitude',
        'longitude',
        'mood',
        'positive_reflection',
        'negative_reflection',
        'physical_effort',
        'economic_effort',
        'expense',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
