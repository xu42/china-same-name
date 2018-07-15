<?php


include 'vendor/autoload.php';


// 查询在河南全省与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan');
var_dump($count);

// 查询在河南郑州与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan.zhengzhou');
var_dump($count);
