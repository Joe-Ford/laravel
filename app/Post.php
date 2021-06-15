<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'title' => 'string',/*public function getPosts()
    {
        $posts = $this->where('user_id', Auth::user()->id)
            ->orderBy('created_at');

        return $posts;
    }*/
        'post' => 'string',
        'user_id' => 'integer'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


}
