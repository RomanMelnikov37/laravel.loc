<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'my_posts';
    protected $attributes = [
        'content' => 'default',
    ];
}
