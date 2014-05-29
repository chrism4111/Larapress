<?php 

namespace Larapress\Providers;

use Illuminate\Support\ServiceProvider;
use Larapress\Core\ViewData;

class CoreServiceProvider extends ServiceProvider{

    public function register(){
      $this->app->bind(
        'Larapress\Models\Repositories\CategoryRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentCategoryRepository'
      );
      
      $this->app->bind(
        'Larapress\Models\Repositories\PostMetaRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentPostMetaRepository'
      );
      
      $this->app->bind(
        'Larapress\Models\Repositories\PostRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentPostRepository'
      );
      
      $this->app->bind(
        'Larapress\Models\Repositories\TagRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentTagRepository'
      );
      
      $this->app->bind(
        'Larapress\Models\Repositories\UserRepository', 
        'Larapress\Models\Repositories\Eloquent\EloquentUserRepository'
      );

      $this->app->singleton( 'ViewData', function(){
        return new ViewData;
      });
      
      //Add the current theme folder to the view finder
      $current_theme = $this->app->make('config')['larapress.themes.current'];
      $this->app->make('view.finder')->addLocation( app_path().'/content/themes/'.$current_theme );
    }//register

}

