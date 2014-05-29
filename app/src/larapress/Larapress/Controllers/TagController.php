<?php
namespace Larapress\Controllers;

use Larapress\Models\Repositories\TagRepository;
use Larapress\Core\ViewData;
use Illuminate\View\Environment;
use Illuminate\Events\Dispatcher;

class TagController extends \BaseController {
  protected $tags;
  
  protected $viewData;
  
  protected $view;

  protected $response;
  
  protected $event;
  
  public function __construct( TagRepository $tags, Environment $view, \Response $response, Dispatcher $event ){
    $this->tags = $tags;
    $this->view = $view;
    $this->response = $response;
    $this->event = $event;
  }//

  public function index( $tag ){
    $posts_tag = $this->tags->find( $tag );
    if( !$posts_tag ){
      //use the lang
      \App::make('ViewData')->addData('page.404', 'message', 'Tag not found');
      $data = \App::make('ViewData')->getData('page.404');
      return $this->response->view('404', [ 'data' => $data ], '404');
    }//if
    
    $this->event->fire('page.tag', $posts_tag);
    $data = \App::make('ViewData')->getData('page.tag');
    return $this->view->make('tag', [ 'data' => $data ]); 
  }//index

}//end class
