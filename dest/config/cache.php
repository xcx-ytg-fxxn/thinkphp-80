<?php

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('cache.driver', 'file'),

    // 缓存连接方式配置
    'stores'  => [
        'file' => [
            // 驱动方式
            'type'       => 'File',
            // 缓存保存目录
            'path'       => '',
            // 缓存前缀
            'prefix'     => '',
            // 缓存有效期 0表示永久缓存
            'expire'     => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制 例如 ['serialize', 'unserialize']
            'serialize'  => [],
        ],
        // 更多的缓存连接
        'redis' => [
            'type'       => 'redis',
            'host'       => getenv('REDIS_HOST') == null ? '127.0.0.1' : getenv('REDIS_HOST'),
            'port'       => getenv('REDIS_PORT') == null ? '6379' : getenv('REDIS_PORT'),
            'password'       => getenv('REDIS_PASSWORD') == null ? '123456' : getenv('REDIS_PASSWORD'),
            'timeout'       => 3600,
        ],
    ],
];
