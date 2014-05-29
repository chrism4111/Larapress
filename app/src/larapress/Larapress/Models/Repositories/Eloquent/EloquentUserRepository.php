<?php 
namespace Larapress\Models\Repositories\Eloquent;

use Larapress\Models\User;
use Larapress\Models\Repositories\UserRepository;

class EloquentUserRepository implements UserRepository{

  public function all(){
    return User::all();
  }

  public function find( $author ){
    return User::whereLogin($author)->first();
  }

  public function create( $inputs ){
    return User::create( $inputs );
  }
}
