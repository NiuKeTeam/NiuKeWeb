<?php
namespace app\index\controller;
use \think\captcha\Captcha;

class Index extends \think\Controller
{
    public function index()
    {
		include "dbConfig.php";////引入dbConfig.php
		initDB_M();//调用dbConfig.php的函数初始化数据库
        return $this->fetch();
	}
}
