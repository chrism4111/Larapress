<?php 
namespace Larapress\Models\Repositories\Eloquent;

use Larapress\Models\Tag;
use Larapress\Models\Repositories\TagRepository;

class EloquentTagRepository implements TagRepository{

  public function all(){
    return Tag::all();
  }

  public function find( $tag ){
    return Tag::whereName( $tag )->first();
  }

  public function create( $inputs ){
    return Tag::create( $inputs );
  }
}
