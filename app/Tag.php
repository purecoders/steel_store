<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = ['post_id', 'name', 'url'];


    public function post(){
      return $this->belongsTo('App\Post');
    }
}
