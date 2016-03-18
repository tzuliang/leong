<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Jero <i@ziliang.me>
// +----------------------------------------------------------------------
// $Id$

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    //index控制器路由
    //'/'       	    => 'Index/index',
    'service'     	=> 'Index/service',
    'projects'		=> 'Index/projects',
 	'about'       	=> 'Index/about',
 	'contact'       => 'Index/contact',

    //content控制器路由
    'announcement/:id'  => 'Content/announcement',
    'dynamic'       => 'Content/dynamic',
    'project'       => 'Content/project',
];
