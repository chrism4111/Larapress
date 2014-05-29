<?php 

namespace Larapress\Models;

class PostMeta extends \Eloquent{

    protected $table = 'posts_meta';

    public function post(){
      return $this->belongsTo('Larapress\Models\Post');
    }
    
}
