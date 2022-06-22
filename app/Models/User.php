<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "admin",
        "username",
        "profile_picture_url",
        "cover_picture_url",
        "biography",
        "location",
        "birthplace",
        "marital_status",
        "password"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "is_admin",
        "password",
        "remember_token",
        "created_at",
        "updated_at"
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return "username";
    }

    /**
     * The role which the user belongs to.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the images fot the related user.
     */
    public function images()
    {
        return $this->morphMany(Image::class, "owner");
    }

    /**
     * The follower users collection from the user.
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, "followed_follower", "followed_id", "follower_id");
    }

    /**
     * The followed users collection from the user.
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, "followed_follower", "follower_id", "followed_id");
    }

    /**
     * The posts collection that the user likes.
     */
    public function posts_liked()
    {
        return $this->belongsToMany(Post::class, "like_post", "user_id");
    }

    /**
     * The posts collection that the user dislikes.
     */
    public function posts_disliked()
    {
        return $this->belongsToMany(Post::class, "dislike_post", "user_id");
    }
}
