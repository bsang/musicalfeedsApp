<?php

class Model_Category extends \Orm\Model
{
  protected static $_properties = array(
    'id',
    'name',
    'url',
    'created_at',
    'updated_at',
  );

  protected static $_has_many = array(
      'comments' => array(
          'key_from' => 'id',
          'model_to' => 'Model_Post',
          'key_to' => 'category_id',
          'cascade_save' => true,
          'cascade_delete' => false,
      ),
  );

  protected static $_observers = array(
    'Orm\\Observer_Slug' => array(
        'events' => array('before_insert'),
        'source' => 'name',   // property used to base the slug on, may also be array of properties
        'property' => 'url',  // property to set the slug on when empty
    ),
  );

  public function url()
  {
    return 'category/' . $this->url;
  }


  public static function get_categories_alphabetical()
  {
    return static::query()->order_by('name', 'asc')->get();
  }


  public static function select_category()
  {
    $categories = static::query()->order_by('name', 'asc')->get();

    $options = array();
    
    foreach ($categories as $category)
    {
      $options[$category->id] = $category->name;
    }
    return $options;
  }


  public static function get_by_url($category_url)
  {
    return static::query()->where('url', $category_url)->get_one();
  }
}