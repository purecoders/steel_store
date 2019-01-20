<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'image_path'];


    public function tags(){
      return $this->hasMany('App\Tag');
    }
}
