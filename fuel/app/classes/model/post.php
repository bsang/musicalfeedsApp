<?php

class Model_Post extends \Orm\Model
{
  protected static $_properties = array(
    'id',
    'url',
    'user_id',
    'category_id',
    'title',
    'content',
    'tags',
    'created_at',
    'updated_at',
  );

  protected static $_observers = array(
    'Orm\Observer_CreatedAt' => array(
      'events' => array('before_insert'),
      'mysql_timestamp' => false,
    ),
    'Orm\Observer_UpdatedAt' => array(
      'events' => array('before_save'),
      'mysql_timestamp' => false,
    ),
    'Orm\Observer_Slug' => array(
      'events' => array('before_insert'),
      'source' => 'title',   // property used to base the slug on, may also be array of properties
      'property' => 'url',  // property to set the slug on when empty
    ),
  );

  public static function validate($factory)
  {
    $val = Validation::forge($factory);
    $val->add_field('title', 'Title', 'required|max_length[255]');
    $val->add_field('genre', 'Genre', 'required|max_length[255]');
    $val->add_field('content', 'Content', 'required');

    return $val;
  }

  // Post Excerpt
  public function content_excerpt($length = 200)
  {
      return substr($this->content, 0, $length);
  }

  public static function article_index()
  {
    return static::query()->order_by('id', 'desc')->get();
  }

  // Custom URL
  public function url($action = null)
  {
    return "article/{$this->url}" . (isset($action) ? "/{$action}" : null);
  }

  public function get_comments()
  {
    return Model_Post_Comment::query()->where('post_id', $this->id)->get();
  }

  // public function get_categories()
  // {
  //   return Model_Categories::query()->where('id', $this->id)->get();
  // }

  public static function get_by_url($url)
  {
    return static::query()->where('url', $url)->get_one();
  }

}