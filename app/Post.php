<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'title', 'body', 'updated_at'];

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function user()
    {
       return $this->belongsTo('App\user','author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
