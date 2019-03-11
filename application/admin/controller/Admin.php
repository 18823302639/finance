<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 16:35
 */
namespace app\admin\controller;

use think\Session;
use think\Request;
use app\admin\model\Admin as AdminModel;

class Admin extends LayHome
{
    public function login(){
        if(Request::instance()->isPost()){
            $user = new AdminModel();
            $data = input('post.');
            $res = $user->where('admin_name', $data['admin_name'])
                        ->where('admin_pwd',md5($data['admin_pwd']))
                        ->fetchSql(false)
                        ->find();
            if($res){
                Session::set('name',$data['admin_name']);
                $this->success("登录成功",url('Home/index'));
            }else{
                $this->error("登录失败");
            }
        }
        return $this->fetch("Home/login");
    }

    public function unsess(){
        if(!Session::pull('name')){
            $this->success("退出成功",url("Admin/login"));
        }

    }


    public function admin_role(){
        $user = new AdminModel();
        $arr = $user->select();
        if($arr){
            $this->assign("arr",$arr);
        }
        return $this->fetch("Home/admin_role");
    }

    public function admin_role_add(){
        if(Request::instance()->isPost()){
            $datas = input('post.');
            $datas['admin_pwd'] = md5($datas['admin_pwd']);
            $user = new AdminModel;
            $user->data([
                'admin_name'  =>  $datas['admin_name'],
                'admin_pwd' =>  $datas['admin_pwd']
            ]);
            $res = $user->save();
            if($res){
                $this->success("添加管理员成功",url('Admin/admin_role'));
            }else{
                $this->error("添加失败");
            }
        }
        return $this->fetch("Home/admin_role_add");
    }

}