<?php
namespace app\manager\model;
use think\model\Relation;
T('model/Auto');

class User extends \think\Model{
    use \traits\model\Auto;

    // 下面是模型类的方法和属性定义
}

class User extends Relation{
}