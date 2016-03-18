<?php
namespace app\manager\controller;
use think\Controller;

class Content extends Controller{

    public function lists()
    {
    	$model = M(); 
        $data = $model->table("article_category c,article_title t")->where('t.categoryId=c.id')->select();
        if ($data) {
            $this->assign('data',$data);
        }
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }

    public function edit()
    {
    	$id = I('get.id',0,'htmlspecialchars');
        if ($id) {
            $model = M(); 
            $data = $model->table("article_category c,article_title t,article a")->where('a.id=t.id and t.categoryId=c.id and a.id='.$id)->find();
            if ($data) {
                $this->assign($data);
            }
        }
        return $this->fetch();
    }

    public function save()
    {
        $id = I('get.id',0,'htmlspecialchars');
        if ($id) {
        	//$data= I('post.',0,'htmlspecialchars');
        	//$data['creationdate'] = strtotime(I('post.creationdate',0,'htmlspecialchars'));
        	//$data['status'] = I('post.status',0,'htmlspecialchars');
        	//$data['categoryId'] = I('post.categoryid',0,'htmlspecialchars')
	        $article = M('article'); 
			$article->create();
			$result = $article->where('id='.$id)->save($data); 
			if ($result){
				return 'success!';
			}else{ 
				return 'error!';
			}
		}
    }

    public function category()
    {

        return $this->fetch();
    }
}
