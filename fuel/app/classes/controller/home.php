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

		$posts = Model_Post::find('all');
		
		$this->template->title  = 'Musical Feeds';
		$this->template->promotion = View::forge('layout/promotion');
		$this->template->content   = View::forge('home/index', array(
			'posts' => $posts,
		), false);
	}  
}