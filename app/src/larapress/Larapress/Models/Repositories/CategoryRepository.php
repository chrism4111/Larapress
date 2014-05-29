<?php 

namespace Larapress\Models\Repositories;

interface CategoryRepository{

  public function all();
  public function find( $id );
  public function create( $input );

}
