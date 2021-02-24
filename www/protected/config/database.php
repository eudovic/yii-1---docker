<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=172.17.0.1:8083;dbname=yii_tests',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'yii_tests',
	'charset' => 'utf8',
	
);