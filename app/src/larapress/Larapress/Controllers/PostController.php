<?php
namespace Larapress\Controllers;

use Larapress\Models\Repositories\PostRepository;
use Larapress\Core\ViewData;
use Illuminate\View\Environment;
use Illuminate\Events\Dispatcher;

class PostController extends \BaseController {
  protected $posts;
  
  protected $viewData;
  
  protected $view;

  protected $response;
  
  protected $event;
  
  public function __construct( PostRepository $posts, Environment $view, \Response $response, Dispatcher $event ){
    $this->posts = $posts;
    $this->view = $view;
    $this->response = $response;
    $this->event = $event;
  }//

  public function index( $slug ){
    $post = $this->posts->find( $slug );
    if( !$post ){
      //use the lang
      \App::make('ViewData')->addData('page.404', 'message', 'Post not found');
      $data = \App::make('ViewData')->getData('page.404');
      return $this->response->view('404', [ 'data' => $data ], '404');
    }//if
    
    $this->event->fire('page.post', $post);
    $data = \App::make('ViewData')->getData('page.post');
    return $this->view->make('single', [ 'data' => $data ]);
  }//index

}//end class
