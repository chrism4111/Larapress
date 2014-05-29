<?php 

namespace Larapress\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends \Eloquent implements SluggableInterface{
  use SluggableTrait;

  protected $table = 'posts';

  protected $sluggable = array(
    'build_from' => 'title',
    'save_to'    => 'slug',
  );
  
  public function user(){
    return $this->belongsTo('Larapress\Models\User');
  }

  public function tags(){
    return $this->belongsToMany('Larapress\Models\Tag');
  }

  public function categories(){
    return $this->belongsToMany('Larapress\Models\Category');
  }
}
