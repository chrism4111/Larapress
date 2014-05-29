<?php

// namespace Vulture\Controller;

use Vulture\Storage\PostRepository;

class PostController extends \BaseController {

	protected $response;
	protected $post;


	public function __construct( \Response $response, PostRepository $post ){
		$this->response = $response;
		$this->post = $post;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$posts = $this->post->all();

		return $posts;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		dd(Input::all());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$post = $this->post->find($id);

		if( $post ){
			return $this->post->find($id);
		}
		else{
			return [ 
				'error_code'	=> 1, 
				'error_message' => 'Post not found'
			];
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
