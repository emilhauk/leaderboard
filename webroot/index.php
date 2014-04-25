<?php

date_default_timezone_set('Europe/Oslo');
defined('APP_ROOT') or define('APP_ROOT', realpath(__DIR__ . '/..'));

$yii = APP_ROOT . '/vendor/yiisoft/yii/framework/yii.php';
$config = APP_ROOT . '/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
