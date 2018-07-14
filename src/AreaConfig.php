<?php

namespace Xu42\ChinaSameName;


final class AreaConfig
{
    const CONFIG = [
        'default' => [

        ],
        'henan' => [
            'default' => [
                'request' => [
                    'url' => 'https://app1.henanga.gov.cn/jmt/app/name_QuerySameName?info=%7B%22guid%22%3A%22410000000000%22%2C%22name%22%3A%22@NAME@%22%7D',
                    'method' => 'get',
                ],
                'response' => [
                    'key' => 'resultData',
                    'pattern' => '',
                ],
            ],
            'zhengzhou' => [

            ],
        ],
        'beijing' => [

        ],
    ];
}