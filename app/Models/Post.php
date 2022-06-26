<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id",
        "title",
        "description",
        "image_url"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "id"
    ];

    /**
     * The user own this post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The users collection that like this post.
     */
    public function users_that_like()
    {
        return $this->belongsToMany(User::class, "like_post", "post_id", "user_id");
    }

    /**
     * The users collection that dislike this post.
     */
    public function users_that_dislike()
    {
        return $this->belongsToMany(User::class, "dislike_post", "post_id", "user_id");
    }
}
