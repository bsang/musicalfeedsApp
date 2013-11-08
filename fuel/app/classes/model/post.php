<?php

class Model_Post extends \Orm\Model
{
  protected static $_properties = array(
    'id',
    'url',
    'user_id',
    'category_id',
    'title',
    'video',
    'content',
    'tags',
    'created_at',
    'updated_at',
  );


  protected static $_belongs_to = array(
    'category' => array(
        'key_from' => 'category_id',
        'model_to' => 'Model_Category',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),

    'user' => array(
        'key_from' => 'user_id',
        'model_to' => 'Model_User',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
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

  public function date($format = 'r')
  {
    return date($format, $this->created_at);
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

  public function total_comments()
  {
    return Model_Post_Comment::query()->where('post_id', $this->id)->count();
  }

  public function add_comment($user_id, $comment)
  {
    $comment = Model_Post_Comment::forge(array(
      'user_id'       => $user_id,
      'post_id'       => $this->id,
      'comment'       => $comment,
    ));

    return $comment->save() ? $comment : false;
  }

  public static function get_by_category($category_id)
  {
    return static::query()->where('category_id', $category_id)->order_by('created_at', 'desc')->get();
  }

  public static function get_by_url($url)
  {
    return static::query()->where('url', $url)->get_one();
  }

}