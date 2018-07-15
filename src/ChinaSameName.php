<?php

namespace Xu42\ChinaSameName;


use Exception;
use GuzzleHttp\Client;


class ChinaSameName
{

    public static function count(string $name, string $area = 'default')
    {
        $config = self::getConfig($area);
        $resp = self::request($name, $config);
        return self::parse($resp, $config);
    }


    private static function getConfig(string $area = 'default'): array
    {
        $configKey = explode('.', $area);
        if (empty($configKey[0])) $configKey = ['default'];

        if (count($configKey) === 1 && $configKey[0] != 'default') $configKey[1] = 'default';

        $config = AreaConfig::CONFIG;
        $configCommon = [];
        if (isset($config[$configKey[0]]['common'])) $configCommon = $config[$configKey[0]]['common'];
        foreach ($configKey as $item) {
            if (isset($config[$item])) $config = $config[$item];
        }

        return array_merge($configCommon, $config);
    }


    private static function request(string $name, array $config): string
    {
        if ($config['method'] == 'get') {
            $url = str_replace('@NAME@', urlencode($name), $config['url']);
            try {
                $res = (new Client)->get($url);
                return $res->getBody()->getContents();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        //todo method is post
    }


    private static function parse(string $resp, array $config)
    {
        $configKey = explode('.', $config['key']);
        if (empty($configKey[0])) return $resp;

        if ($resp = json_decode($resp, true)) {
            foreach ($configKey as $item) {
                if (is_array($resp) && isset($resp[$item])) $resp = $resp[$item];
            }
        }

        return $resp;
    }
}