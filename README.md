# china-same-name
🇨🇳中国同名同姓查询

## Install

Via Composer

``` bash
$ composer require xu42/china-same-name
```

## Usage

⚠️注意: 目前仅支持河南全省及其各市查询.


``` php
require_once 'vendor/autoload.php';

// 查询在北京与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'beijing');

// 查询在河南全省与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan');

// 查询在河南郑州与张伟同名的人数
$count = \Xu42\ChinaSameName\ChinaSameName::count('张伟', 'henan.zhengzhou');

var_dump($count);
```

## Contributing

1. Fork me
2. 参考 [henan.default](https://github.com/xu42/china_same_name/blob/86980484c6c4aa2d0c0aba1662c445f87b0ef2c9/src/AreaConfig.php#L13-L20) , 补充完善
例如要添加台湾省的配置，需按照下列格式进行补充
```php
const CONFIG = [
    'henan' => [
        ... //此处配置省略
    ],
    'taiwang' => [
        // common 为本省一些通用的配置, 例如method\key\pattern等,优先级低于具体地级市配置
        'common' => [
            'method' => 'get',
            'key' => 'data.count',
        ],
        // default 为全省的统计
        'default' => [
            'method' => 'get', //get or post
            'url' => 'https://people.gov.cn/count.json?name=@NAME@', // @NAME@会被替换为URL编码后的姓名 (post暂不支持)
            'key' => 'data.count', //对于接口返回是Json格式的,可以通过此字段进行提取 {'data':{'count':123}}
            'pattern' => '#all(\d+)people#', //对于接口返回非Json格式的文本的,可以通过正则匹配进行提取(暂不支持 欢迎提交PR或后续有需求再加)
            'params' => [], //method=post时的参数 (post暂不支持)
        ],
        // 台北市统计
        'taibei' => [
            ... //此处配置省略
        ],
    ],
    ... //此处配置省略
];

```
3. Pull Request


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
