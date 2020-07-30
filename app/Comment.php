<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id','post_id','description', 'updated_at'];

  /**
   * Get the post that owns the comment.
   */
  public function post()
  {
      return $this->belongsTo('App\Post');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
