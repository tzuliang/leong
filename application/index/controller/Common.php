<?php
namespace app\index\controller;
use think\Controller;

class Common extends Controller{

    public function verify()
    {
    	$config =    array(
    		'expire'	=>	120,	// 有效期
		    'fontSize'  =>	18,    	// 验证码字体大小
		    'length'    =>	5,     	// 验证码位数
		    'imageW'    =>	150, 	// 宽
		    'imageH'    =>	33,		// 高
		    'useCurve'  =>	true,	// 混淆曲线
		    'useNoise'  =>	true,	// 杂点
		    'useImgBg' 	=> 	false,	// 背景
		    'fontttf' 	=> 	'4.ttf',//验证码字体
		);
    	$verify = new \org\Verify($config);
		$verify->entry();
    }
}