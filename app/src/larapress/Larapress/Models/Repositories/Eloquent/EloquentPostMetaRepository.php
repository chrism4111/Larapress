<?php 
namespace Larapress\Models\Repositories\Eloquent;

use Larapress\Models\PostMeta;
use Larapress\Models\Repositories\PostMetaRepository;


class EloquentPostMetaRepository implements PostMetaRepository{

  public function all(){
    return PostMeta::all();
  }

  public function find( $id ){
    return PostMeta::find( $id );
  }

  public function create( $inputs ){
    return PostMeta::create( $inputs );
  }
}
