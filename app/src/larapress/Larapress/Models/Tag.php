<?php 

namespace Larapress\Models;

class Tag extends \Eloquent{

    protected $table = 'tags';
    
    public function posts(){
        return $this->belongsToMany('Larapress\Models\Post');
    }
}
