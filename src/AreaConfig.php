<?php

namespace Xu42\ChinaSameName;


final class AreaConfig
{
    const CONFIG = [
        'default' => [

        ],
        'henan' => [
            'common' => [
                'method' => 'get',
                'key' => 'resultData',
                'pattern' => '',
            ],
            'default' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410000000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'zhengzhou' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410100000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'kaifeng' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410200000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'luoyang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410300000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'pingdingshan' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410400000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'anyang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410500000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'hebi' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410600000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'xinxiang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410700000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'jiaozuo' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410800000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'puyang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410900000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'xuchang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411000000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'luohe' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411100000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'sanmenxia' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411200000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'nanyang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411300000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'shangqiu' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411400000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'xinyang' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411500000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'zhoukou' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411600000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
            'zhumadian' => [
                'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22411700000000%22%2C%22name%22%3A%22@NAME@%22%7D',
            ],
        ],
        'beijing' => [

        ],
        'zhejiang' => [
            'common' => [
                'method' => 'get',
                'url' => 'http://team.zjqq.mobi/repeat_name.php?name=@NAME@',
            ],
            'default' => [
                'key' => 'out.ArrayOfString.11.string.3',
            ],
            'hangzhou' => [
                'key' => 'out.ArrayOfString.0.string.3',
            ],
            'ningbo' => [
                'key' => 'out.ArrayOfString.1.string.3',
            ],
            'wenzhou' => [
                'key' => 'out.ArrayOfString.2.string.3',
            ],
            'shaoxing' => [
                'key' => 'out.ArrayOfString.3.string.3',
            ],
            'jiaxing' => [
                'key' => 'out.ArrayOfString.4.string.3',
            ],
            'huzhou' => [
                'key' => 'out.ArrayOfString.5.string.3',
            ],
            'jinhua' => [
                'key' => 'out.ArrayOfString.6.string.3',
            ],
            'quzhou' => [
                'key' => 'out.ArrayOfString.7.string.3',
            ],
            'zhoushan' => [
                'key' => 'out.ArrayOfString.8.string.3',
            ],
            'taizhou' => [
                'key' => 'out.ArrayOfString.9.string.3',
            ],
            'lishui' => [
                'key' => 'out.ArrayOfString.10.string.3',
            ],
        ],
    ];
}