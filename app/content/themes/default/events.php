<?php
use Larapress\Models\Repositories\PostRepository;
use Larapress\Core\ViewData;


\Event::listen('page.index', function(){
  $posts_repo = App::make('Larapress\Models\Repositories\PostRepository');
  $posts = $posts_repo->all();
  $viewData = App::make('ViewData');
  
  $viewData->addData( 'page.index', 'posts', $posts );
});

\Event::listen('page.tag', function($tag){
  $posts = $tag->posts()->get() ? : [];
  $viewData = App::make('ViewData');

  $viewData->addData('page.tag', 'posts', $posts );
  $viewData->addData('page.tag', 'tag', $tag );
});

\Event::listen('page.category', function($category){
  $posts = $category->posts()->get() ? : [];
  $viewData = App::make('ViewData');

  $viewData->addData('page.category', 'posts', $posts );
  $viewData->addData('page.category', 'category', $category );
});

\Event::listen('page.author', function($author){
  $posts = $author->posts()->get() ? : [];
  $viewData = App::make('ViewData');

  $viewData->addData('page.author', 'posts', $posts );
  $viewData->addData('page.author', 'author', $author );
});

\Event::listen('page.post', function($post){
  $viewData = App::make('ViewData');

  $viewData->addData('page.post', 'post', $post );
});
