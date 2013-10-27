<?php

class Model_Post_Comment extends \Orm\Model
{
	protected static $_has_many = array(
		'id',
	  'post_id',
	  'user_id',
	  'comment',
	  'created_at',
	  'updated_at',
	);
}