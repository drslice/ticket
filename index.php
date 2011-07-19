<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

if (strpos($_SERVER['SERVER_NAME'], 'dev.') !== false)
{
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
	// use test config
	//$config=dirname(__FILE__).'/protected/config/test.php';
}

require_once($yii);
Yii::createWebApplication($config)->run();
