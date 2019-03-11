<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 15:56
 */
namespace app\admin\controller;

use think\Session;
use think\Request;

class Home extends LayHome
{

    public function index(){
        if(!Session::has('name')){
            $this->error("您还未登录，请登录",url("Admin/login"));
        }
        return $this->fetch();
    }


    public function welcome(){
        return $this->fetch();
    }






}