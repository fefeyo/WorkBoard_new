<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Work extends Model
{

    protected $fillable = [
        'user_id',
        'due',
        'reward',
        'necessary',
        'type',
        'title',
        'body'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
