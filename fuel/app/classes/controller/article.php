<?php

class Controller_Article extends Controller_Base
{
	public function before()
	{

		parent::before(); // run this first

		Casset::css('style.css');
	}

	public function get_view($url)
	{

		$post = Model_Post::get_by_url($url);

		if(! $post)
		{
			throw new HttpNotFoundException;
		}

		Casset::css('detail.css');

		$this->template->title  = 'Musical Feeds' . ' | ' . ' Content title';
		$this->template->content   = View::forge('home/view', array(
			'post'      	=> $post,
			// 'categories' 	=> $post->get_categories(),
			'comments'  	=> $post->get_comments(),
		), false);
	}


	public function get_create()
	{
		$this->template->title  = "Posts";
		$this->template->content   = View::forge('post/create');
	}


	public function post_create()
	{
		$val = Model_Post::validate('create');

		$post = Model_Post::forge(array(
			'title'   			=> Input::post('title'),
			'category_id'   => Input::post('genre'),
			'content' 			=> Input::post('content'),
			'tags' 					=> Input::post('tags'),
			'user_id' 			=> $this->auth->get_user_id()[1],
		));

		if (! $post->save())
		{
			$this->redirect('create', 'error', 'Could not save post.');
		}

		$this->redirect('home', 'success', "Added new post #{$post->id}");
	}


	public function get_edit($url)
	{
		if ( ! $post = Model_Post::get_by_url($url))
		{
			$this->redirect($post->url('edit'), 'error', "Could not find post #{$post->id}");
		}

		$this->template->title = "Posts";
		$this->template->content  = View::forge('post/edit', array(
			'post' => $post,
		));

	}


	public function post_edit($url)
	{
		$val = Model_Post::validate('edit');

		if ( ! $post = Model_Post::get_by_url($url))
		{
			$this->redirect($post->url('edit'), 'error', "Could not find post #{$post->id}");
		}

		if (! $val->run())
		{
			$this->redirect($post->url('edit'), 'error', $val->error());
		}

		$post->title    = $val->validated('title');
		$post->genre    = $val->validated('genre');
		$post->content  = $val->validated('content');
		$post->tags     = $val->validated('tags');

		if (! $post->save())
		{
			$this->redirect($post->url('edit'), 'error', 'Could not update post #' . $id);
		}

		$this->redirect($post->url(), 'success', "Successfully Updateds post #{$post->id}");
	}


	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('post');

		if ($post = Model_Post::find($id))
		{

			$post->delete();

			Session::set_flash('success', 'Deleted post #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete post #'.$id);
		}

			Response::redirect('post');

		}
	}