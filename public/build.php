<?php
/*!
 * @author:大橙子
 * @website:https://amujie.com
 * @qqcode:1570457334
 */
header('Content-Type:text/html;charset=utf-8');
//超时时间
@ini_set('max_execution_time', '0');
//内存限制 取消内存限制
@ini_set("memory_limit", '-1');
// 定义应用目录
define('ROOT_PATH', '../../../');
define('CONF_PATH', '../../../application/');
define('APP_PATH', dirname(dirname(__FILE__)) . '/dev/');
define('THEME_PATH', dirname(dirname(__FILE__)) . '/');
define('THEME_NAME', basename(__FILE__));
define('BIND_MODULE', 'build');
define('ENTRANCE', 'build');
// 加载框架引导文件
// require APP_PATH . '/build/common.php';
require '../../../thinkphp/start.php';
