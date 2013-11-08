<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
    'id',
    'username', 
    'first_name', 
    'last_name',
    'email',
    'password',
    'login_hash', 
    'city',
    'created_at',
    'updated_at',

  );

  protected static $_has_many = array(
      'posts' => array(
          'key_from' => 'id'
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
    'Orm\\Observer_Self' => array(
            'events' => array('before_save', 'after_insert')
    ),
  );


  public static function get_by_id($id)
  {
    return static::query()->where('id', $id)->get_one();
  }

  public static function get_by_email($email)
  {
    return static::query()->where('email', $email)->get_one();
  }

}