<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Gerenciamento de Unidades',

	// preloading components
	'preload'=>array(
                'log',
                'bootstrap',
                ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
        'theme'=>'booster',
        'homeUrl'=>array('unidade/index'),
	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'pause7002',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                           'bootstrap.gii'
                        ),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
                        'class' => 'WebUser',
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sgu',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'Libera@MYSQL!new#',
			'charset' => 'utf8',
                        'initSQLs'=>array("set time_zone='-03:00';"),
		),
                'bootstrap' => array(
                    'class' => 'ext.bootstrap.components.Bootstrap',
                    'responsiveCss' => true,
                ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);