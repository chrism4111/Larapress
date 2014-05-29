<?php 

namespace Larapress\Providers;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider{

    public function register(){
      $this->app->bind(
        'Larapress\Models\Repositories\PostRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentPostRepository'
      );
    }

}
