<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostEvent;

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

    public static function boot()
    {
        parent::boot();
        static::created(function ($post) {
            PostEvent::fire('post.created', $post);
        });
    }
}
