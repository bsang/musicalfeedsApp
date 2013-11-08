<?php

class Controller_Base extends Controller_Template
{

	public function before()
	{
		parent::before();

		$this->_init_app();
	}


	public function redirect($location, $type = null, $message = null)
	{
		if (! is_null($type) and ! is_null($message))
		{
			Session::set_flash($type, $message);
		}

		Response::redirect($location);
	}

	public function user_logged_in()
	{
		return isset($this->user);
	}

	public function require_auth($location = '/')
	{
		if (! $this->user_logged_in())
		{
			$this->redirect($location, 'info', 'You must be logged in to do that.');
		}
	}

	private function _init_app()
	{
		$this->_init_auth();
		$this->_init_user();
		$this->_init_notice();
		$this->_init_template();
	}

	private function _init_auth()
	{
		$this->auth = Auth::instance();
	}

	private function _init_user()
	{
		if ($this->auth->check())
		{
			list($driver, $user_id) = Auth::get_user_id();
			$this->user = Model_User::find($user_id);
		}
		else
		{
			$this->user = null;
		}
	}

	private function _init_notice()
	{
		foreach (array('error', 'success', 'info') as $type)
		{
			$notice = Session::get_flash($type);

			if (isset($notice))
			{
				$this->template->notice = (object) array('type' => $type, 'message' => $notice);
				break;
			}
		}
	}

	private function _init_template()
	{
		if (! isset($this->template))
		{
			return true;
		}

		// set global template variables
		$this->template->set_global('user', $this->user, false);
		
		// $this->template->view  = new stdClass;
		// $this->template->modal = '';

		// site header
		$this->user_logged_in()
			? $this->template->header = View::forge('layout/header')
			: $this->template->header = View::forge('layout/header');

		// navigation
		$this->template->navigation = View::forge('layout/navigation', array(
			'categories' => Model_Category::get_categories_alphabetical(),
		));

		// enviroment specific
		switch (Fuel::$env)
		{
			case \Fuel::DEVELOPMENT:
				//Casset::js('site.js');
				break;

			default:
				//Casset::js('site.js');
			
		}
	}

}