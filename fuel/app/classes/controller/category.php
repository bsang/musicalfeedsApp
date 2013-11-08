<?php

class Controller_Category extends Controller_Base
{
  public function before()
  {

    parent::before(); // run this first

    Casset::css('style.css');
  }


  public function get_index($url)
  {
    if (! $category = Model_Category::get_by_url($url))
    {
      throw new HttpNotFoundException;
    }

    $posts = Model_Post::get_by_category($category->id);
    
    $this->template->title     = 'Musical Feeds' .' | '. $category->name;
    $this->template->content   = View::forge('genre/category', array(
      'category' => $category,
      'posts' => $posts,
    ), false);
  }
}