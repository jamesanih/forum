<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'comment', 'topics_id','image', 'who_made_comment', 
    ];
}
