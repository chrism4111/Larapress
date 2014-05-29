<?php
namespace Larapress\Controllers;

use Larapress\Models\Repositories\UserRepository;
use Larapress\Core\ViewData;
use Illuminate\View\Environment;
use Illuminate\Events\Dispatcher;

class AuthorController extends \BaseController {
  protected $users;
  
  protected $viewData;
  
  protected $view;

  protected $response;
  
  protected $event;
  
  public function __construct( UserRepository $users, Environment $view, \Response $response, Dispatcher $event ){
    $this->users = $users;
    $this->view = $view;
    $this->response = $response;
    $this->event = $event;
  }//

  public function index( $author ){
    $posts_author = $this->users->find( $author );
    if( !$posts_author ){
      //use the lang
      \App::make('ViewData')->addData('page.404', 'message', 'User not found');
      $data = \App::make('ViewData')->getData('page.404');
      return $this->response->view('404', [ 'data' => $data ], '404');
    }//if
     
    $this->event->fire('page.author', $posts_author);
    $data = \App::make('ViewData')->getData('page.author');
    return $this->view->make('author', [ 'data' => $data ]); 
  }//index

}//end class
