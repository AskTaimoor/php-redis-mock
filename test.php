<?php
include 'php-redis-mock.php';

$redis = new Redis();
$redis->set('var1', 'some value');
echo $redis->get('var1');

echo PHP_EOL;

$redis->set('current_time', date('Y-m-d H:i:s'));
echo $redis->get('current_time');
?>
