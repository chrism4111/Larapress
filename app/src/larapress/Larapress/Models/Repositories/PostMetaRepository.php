<?php 

namespace Larapress\Models\Repositories;

interface PostMetaRepository{

  public function all();
  public function find( $id );
  public function create( $input );

}
