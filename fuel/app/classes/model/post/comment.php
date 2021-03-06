<?php

class Model_Post_Comment extends \Orm\Model
{
	protected static $_properties = array(
		'id',
	  'post_id',
	  'user_id',
	  'comment',
	  'created_at',
	  'updated_at',
	);

  protected static $_belongs_to = array(
    'user' => array(
        'key_from' => 'user_id',
        'model_to' => 'Model_User',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),

    'post' => array(
        'key_from' => 'post_id',
        'model_to' => 'Model_Post',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
      ),
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
  );

  public function date($format = 'r')
  {
    return date($format, $this->created_at);
  }
}