<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller{

    public function index()
    {
        $article = M("article_title"); // 实例化User对象
        // 查找status值为1的用户数据 以创建时间排序 返回10条数据
        $list = $article->where('categoryId=1')->order('creationdate')->limit(5)->select();
        if ($list) {
            $this->assign('announcement',$list);
        }
        return $this->fetch();
    }

    public function service()
    {
        $this->assign('title','服务项目');
        return $this->fetch();
    }

    public function projects()
    {
        $this->assign('title','项目案例');
        return $this->fetch();
    }

    public function about()
    {
        $this->assign('title','关于尚辰');
        return $this->fetch();
    }

    public function contact()
    {
        $this->assign('title','联系我们');
        return $this->fetch();
    }

}
