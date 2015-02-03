<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	/* All environments */
	'*' => array (
		'server' => 'localhost',
		'tablePrefix' => 'recipes'
	),

	/* Dev environment */
	'recipes.nkatarow.dev' => array (
		'database' => 'recipes',
		'user' => 'root',
		'password' => 'root'
	),

	/* Production environment */
	'recipes.nkatarow.net' => array (
		'database' => '',
		'user' => '',
		'password' => ''
	)

);
