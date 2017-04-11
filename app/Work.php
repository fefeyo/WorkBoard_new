<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Work extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
