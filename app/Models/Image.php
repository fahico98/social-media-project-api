<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "image_type",
        "owner_type",
        "owner_id",
        "url",
        "size",
        "file_name"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        "owner_id",
        "owner_type"
    ];

    /**
     * Get the model that the image belongs to.
     */
    public function owner()
    {
        return $this->morphTo(__FUNCTION__, "owner_type", "owner_id");
    }
}
