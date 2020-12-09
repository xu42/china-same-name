<?php

$name = implode(' ', array_slice($argv, 1));
$name = $name ?? '张伟';
echo "你要查询{$name}的同名人数：" . PHP_EOL;

include 'vendor/autoload.php';

$count = \Xu42\ChinaSameName\ChinaSameName::count($name, 'henan');
echo "\t河南:" . $count . PHP_EOL;

$count = \Xu42\ChinaSameName\ChinaSameName::count($name, 'henan.pingdingshan');
echo "\t河南平顶山:" . $count . PHP_EOL;


$count = \Xu42\ChinaSameName\ChinaSameName::count($name, 'zhejiang');
echo "\t浙江:" . $count . PHP_EOL;

$count = \Xu42\ChinaSameName\ChinaSameName::count($name, 'zhejiang.hangzhou');
echo "\t浙江杭州:" . $count . PHP_EOL;
