<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['deleted_at'];

    public $appends = ['date', 'image_url', 'author'];

    /**
     * Return Comments related with this post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Return user that is an author of this post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Attribute for return image link.
     */
    public function getImageUrlAttribute()
    {
        return url('/'). '/' . $this->image;
    }

    /**
     * Attribute for return Author name.
     */
    public function getAuthorAttribute()
    {
        return $this->user->name;
    }

    /**
     * Attribute for return an custom formate date.
     */
    public function getDateAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }

    /**
     * Bind routes from slug.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Booted method for deleting all comments related to this post if this post is being deleted. 
     */
    public static function boot()
    {
        parent::boot();
        static::deleted(function ($model) {
            $model->comments()->delete();
        });
    }
}
