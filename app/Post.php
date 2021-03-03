<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'title','body' ];
   /* protected $hidden   = ['title','body'];
    protected $appends  = ['post_name','post_body'];


    public function getPostNameAttribute()
    {
      return strtoupper($this->title);

    }

    public function getPostBodyAttribute()
    {
      return strtoupper(
          substr($this->body, 0, 10)
        ).'...';

    }*/
}
