<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public function thread()
    {
        return $this->belongsTo(Threads::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
