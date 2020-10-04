<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry->user
    //Entry M - 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
