<?php 
namespace Larapress\Models\Repositories\Eloquent;

use Larapress\Models\Post;
use Larapress\Models\Repositories\PostRepository;


class EloquentPostRepository implements PostRepository{

  public function all(){
    return Post::all();
  }

  public function find( $slug ){
    return Post::whereSlug( $slug )->first();
  }

  public function create( $inputs ){
    return Post::create( $inputs );
  }
}
