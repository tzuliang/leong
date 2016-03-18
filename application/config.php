<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    //'response_exit'         => true,               //页面Trace
    'url_route_on'          => true,                //开启路由功能，true or false
    'url_route_must'        => false,               //必须定义路由才能访问
    'base_url'              => '/sc/public',        //基础URL路径,可用于隐藏index.php
    'log'                   => [
        'type'              => 'trace', // 支持 socket trace file
        // 以下为socket类型配置
        'host'              => '111.202.76.133',
        //日志强制记录到配置的client_id
        'force_client_ids'  => [],
        //限制允许读取日志的client_id
        'allow_client_ids'  => [],
    ],

    'parse_str'     =>[
        '__STATIC__'        =>  '/sc/public/static',
        '__ROOT__'          =>  '/sc/public',
    ],

];


