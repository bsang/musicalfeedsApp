<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?= isset($title) ? $title : 'MusicalFeeds - Login' ?></title>
    <?= Casset::render_css() ?>
  </head>

  <body>
  <header>
    <?= View::forge('layout/header') ?>
  </header>

  <div class="pageBackground">
    <section class="landing">
      <article class="intro">
        <h1>Welcome to Music Connect.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum sit amet sapien quis volutpat.</p>
      </article>

      <div class="RegisterLogin">
        <div class="login">
          <h1>Log In</h1>

          <?= Form::open(array("id"=>"loginForm", 'action' => 'users/login')); ?>

            <?= Form::input('email', 
              Input::post('email'),
              array('id' => 'username', 'placeholder'=>'Email')); ?>
            
            <?= Form::input('password', 
              Input::post('password'),
              array('id' => 'password', 'type' => "password", 'placeholder'=>'Password')); ?>

            <?= Form::submit('submit', 'Login', 
              array('id' => 'login')); ?>

          <?= Form::close(); ?>


          <div class="lineDivider">
            <hr id="fline"/><span>OR</span><hr id="sline"/>
            <div class="clearFix"></div>
          </div>
          
          <div class="fbLogin">
            <p>Login With Facebook</p>
          </div>
          <div class="twitterLogin">
            <p>Login With Twitter</p>
          </div>
        </div>

        <div class="formLine"></div>

        <div class="registerNewUser">
          <h1>Create New Account</h1>
          <?= Form::open(array("id"=>"registerForm", 'action' => 'users/register')); ?>
            
            <?= Form::input('first_name', 
              Input::post('first_name'),
              array('id' => 'fname', 'placeholder'=>'Fist Name')); ?>
            
            <?= Form::input('last_name', 
              Input::post('last_name'),
              array('id' => 'lname', 'placeholder'=>'Last Name')); ?>
              
            <?= Form::input('email', 
              Input::post('email'),
              array('id' => 'email', 'placeholder'=>'Email')); ?>
            
            <?= Form::input('password', 
              Input::post('password'),
              array('id' => 'registerPassword', 'placeholder'=>'Password', 'type' => 'password')); ?>
               
            <?= Form::input('confirm_password', 
              Input::post('confirm_password'),
              array('id' => 'confirmPassword', 'placeholder'=>'Confirm Password', 'type' => 'password')); ?>
            
            <?= Form::input('city', 
              Input::post('city'),
              array('id' => 'location', 'placeholder'=>'Current City (Optional)')); ?>
            
             <?= Form::submit('submit', 'Sign up for Music Connect', 
              array('id' => 'registerBtn')); ?>

          <?= Form::close(); ?>
          
        </div>
        <div class="clearFix"></div>
      </div>
      <div class="clearFix"></div>
    </section>
  </div>


  <?= Asset::js('http://code.jquery.com/jquery-1.9.1.js') ?>
    <?= Asset::js('http://code.jquery.com/ui/1.10.3/jquery-ui.js') ?>
    <?= Asset::js('jquery.sticky.js') ?>
    <?= Asset::js('script.js') ?>
    <?= Casset::render_js() ?>