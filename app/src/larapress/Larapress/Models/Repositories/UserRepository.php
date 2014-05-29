<?php 

namespace Larapress\Models\Repositories;

interface UserRepository{

  public function all();
  public function find( $author );
  public function create( $input );

}
