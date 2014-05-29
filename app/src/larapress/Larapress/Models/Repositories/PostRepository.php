<?php 

namespace Larapress\Models\Repositories;

interface PostRepository{

  public function all();
  public function find( $slug );
  public function create( $input );

}
