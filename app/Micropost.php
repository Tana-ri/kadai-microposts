<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
     protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //追加
    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'micropost_id')->withTimestamps();
    }

    public function be_favorited()
    {
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
}
