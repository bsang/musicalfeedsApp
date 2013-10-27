<?php

class Model_Category extends \Orm\Model
{
  protected static $_properties = array(
    'id',
    'name',
    'created_at',
    'updated_at',
  );


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
}