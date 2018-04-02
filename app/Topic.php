<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name', 'desc', 'forums_id','trends_id', 'tags','likes','user_id',
    ];

    protected $dates = [
    	'created_at', 'update_at',
    ];
}
