<?php
namespace app\index\controller;
use think\Controller;

class Content extends Controller{

    public function announcement()
    {
        $id = I('get.id',0,'htmlspecialchars');
        if ($id) {
            $model = M(); 
            $data = $model->table("article_category c,article_title t,article a")->where('a.id=t.id and t.categoryId=c.id and t.categoryId=1 and a.id='.$id)->find();
            if ($data) {
                $this->assign($data);

                //点击量增加，延迟300s(5min)写入
                M("article")->where('id='.$id)->setInc('hits',1,300);
            }
        }
        return $this->fetch('index/page');
    }

    public function dynamic()
    {
        return $this->fetch('index/page');
    }

    public function project()
    {
        return $this->fetch('index/page');
    }

}
