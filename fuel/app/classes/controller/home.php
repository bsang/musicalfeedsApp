<?php

class Controller_Home extends Controller_Base
{
	public function before()
	{

		parent::before(); // run this first

		Casset::css('style.css');
	}


	public function get_index()
	{

		$posts = Model_Post::query()->order_by('created_at', 'desc')->get();
		// $posts = Model_Post::get_by_category(1);

		$this->template->title     = 'Musical Feeds';
		$this->template->promotion = View::forge('layout/promotion');
		$this->template->content   = View::forge('home/index', array(
			'posts' => $posts,
		),false);
	}
}