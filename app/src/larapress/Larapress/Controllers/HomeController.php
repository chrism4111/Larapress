<?php
namespace Larapress\Controllers;

use Larapress\Models\Repositories\PostRepository;
use Larapress\Core\ViewData;
use Illuminate\View\Environment;
use Illuminate\Events\Dispatcher;

class HomeController extends \BaseController {
  protected $posts;
  
  protected $viewData;

  protected $view;
  
  protected $event;

  public function __construct( PostRepository $posts, Environment $view, Dispatcher $event ){
    $this->posts = $posts;
    $this->view = $view;
    $this->event = $event;
  }//

  public function index(){
    $this->event->fire('page.index');
    
    $data = \App::make('ViewData')->getData('page.index');
    return $this->view->make('index', [ 'data' => $data ] );
  }//index

}//end class
