<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gametype',
    ];
}
