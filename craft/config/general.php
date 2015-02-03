<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

	/* All environments */
	'*' => array (
		'allowAutoUpdates' => true,
		'backupDbOnUpdate' => true,
		'restoreDbOnUpdateFailure' => true,
		'cpTrigger' => 'manage',
		'omitScriptNameInUrls', true
	),

	/* Dev environment */
	'craft.dev' => array (
		'devMode' => true,

        'environmentVariables' => array(
            'basePath' => '/users/nick/sites/recipes/public/',
            'baseUrl'  => 'http://recipes.nkatarow.dev/',
        )
	),

	/* Production environment */
	'craft.com' => array (
		'maxInvalidLogins' => 3,

        'environmentVariables' => array(
            'basePath' => '/storage/av12345/www/public_html/',
            'baseUrl'  => 'http://recipes.nkatarow.net/',
        )
	)
);
