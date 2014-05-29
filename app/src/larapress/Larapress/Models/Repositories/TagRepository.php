<?php 

namespace Larapress\Models\Repositories;

interface TagRepository{

  public function all();
  public function find( $tag );
  public function create( $input );

}
