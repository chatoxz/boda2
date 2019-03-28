<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 21/3/2019
 * Time: 16:01
 */
?>
<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/_protected/vendor/autoload.php');
require(__DIR__ . '/_protected/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/_protected/config/web_belenysergiodoce.php');

(new yii\web\Application($config))->run();
