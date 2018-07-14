# china_same_name
🇨🇳中国同名同姓查询

## Install

Via Composer

``` bash
$ composer require xu42/china_same_name
```

## Usage

⚠️注意: 目前仅支持河南省一级查询.


``` php
require_once 'vendor/autoload.php';

// 查询在北京与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'beijing');

// 查询在河南与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan');

// 查询在河南郑州与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan.zhengzhou');

var_dump($count);
```

## Contributing

1. Fork me
2. 参考 [henan.default](https://github.com/xu42/china_same_name/blob/754b41177caba0732c1897a9d7f254098328f65c/src/AreaConfig.php#L13-L22) , 补充完善
3. Pull Request


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
