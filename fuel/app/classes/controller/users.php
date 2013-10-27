<?php 

class Controller_Users extends Controller_Base
{

  public function before()
  {

    parent::before(); // run this first

    Casset::css('style.css');
  }

	public function get_profile()
	{
		// $user = Model_User::find($id);

  //   if(! $user)
  //   {
  //     throw new HttpNotFoundException;
  //   }

  //   Casset::css('profile.css');

		// $this->template->title = 'Profile:';
		// $this->template->content = View::forge('users/profile', array('user' => $user));

    Casset::css('profile.css');

    $this->template->title = 'Profile:';
    $this->template->content = View::forge('users/profile');
	}

  public function get_login()
  {
    return Response::forge(View::forge('users/login'));
  }

  public function post_login()
  {
    $email = Input::post('email');
    $password = Input::post('password');

    if (! $this->auth->login($email, $password))
    {
      $this->redirect('users/login', 'error', 'Login error');
    }

    $this->redirect('home', 'success', 'You have logged in');
  }

  public function post_register()
  {
    $first_name    = Input::post('first_name');
    $last_name     = Input::post('last_name');
    $email         = Input::post('email');
    $password      = Input::post('password');
    $confirmPass   = Input::post('confirm_password');
    $city          = Input::post('city');

    // $form->validation()->run();

    // if ($form->validation()->error())
    // {
    //   //$this->redirect('');
    // }


    // if ($form->validated($confirmPass) !== $form->validated($password))
    // {
    //   // $this->redirect
    // }

    if (! $this->auth->create_user($email, $password, $email))
    {
      throw new Exception("Error Processing Request", 1);
      //redirect
    }

    $user = Model_User::get_by_email($email);
  
    $user->first_name = $first_name;
    $user->last_name  = $last_name;
    $user->city       = $city;
    $user->save();

    $this->redirect('home', 'success', 'You are now registered');
  }

  public function get_logout()
  {
    Auth::logout();

    Session::set_flash('success', 'you have logged out.');
    Response::redirect('/home');
  }

}