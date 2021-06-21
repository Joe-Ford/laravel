<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = "id";

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'post' => 'string',
        'user_id' => 'integer'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


}
