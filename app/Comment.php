<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->BelongsTo(Post::class);
    }
}
