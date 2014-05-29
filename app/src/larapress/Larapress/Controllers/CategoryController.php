<?php
namespace Larapress\Controllers;

use Larapress\Models\Repositories\CategoryRepository;
use Larapress\Core\ViewData;
use Illuminate\View\Environment;
use Illuminate\Events\Dispatcher;

class CategoryController extends \BaseController {
  protected $tags;
  
  protected $viewData;
  
  protected $view;

  protected $response;
  
  protected $event;
  
  public function __construct( CategoryRepository $categories, Environment $view, \Response $response, Dispatcher $event ){
    $this->categories = $categories;
    $this->view = $view;
    $this->response = $response;
    $this->event = $event;
  }//

  public function index( $category ){
    $posts_category = $this->categories->find( $category );
    if( !$posts_category ){
      //use the lang
      \App::make('ViewData')->addData('page.404', 'message', 'Category not found');
      $data = \App::make('ViewData')->getData('page.404');
      return $this->response->view('404', [ 'data' => $data ], '404');
    }//if
    
    $this->event->fire('page.category', $posts_category);
    $data = \App::make('ViewData')->getData('page.category');
    return $this->view->make('category', [ 'data' => $data ]); 
  }//index

}//end class
