<?php 

namespace Larapress\Models;

class Category extends \Eloquent{

    protected $table = 'categories';
    
    public function posts(){
        return $this->belongsToMany('Larapress\Models\Post');
    }    
}
