<?php
namespace app\manager\controller;
use think\Controller;

class Module extends Controller{

    public function guestbook()
    {
        return $this->fetch();
    }

}
