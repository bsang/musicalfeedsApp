<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

  'category/(:any)' => 'category/index/$1',
	
  'article/create'            => 'article/create',
  'article/(:segment)/edit'   => 'article/edit/$1',
  'article/(:segment)/delete' => 'article/delete/$1',
	'article/(:segment)'        => 'article/view/$1',
);