<?php 

namespace Larapress\Models\Repositories\Eloquent;

use Larapress\Models\Category;
use Larapress\Models\Repositories\CategoryRepository;

class EloquentCategoryRepository implements CategoryRepository{

  public function all(){
    return Category::all();
  }

  public function find( $category ){
    return Category::whereName($category)->first();
  }

  public function create( $inputs ){
    return Category::create( $inputs );
  }
}
