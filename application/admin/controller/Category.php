<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/7
 * Time: 10:18
 */
namespace app\admin\controller;

use think\Request;
use app\admin\model\Category as CategoryModel;

class Category extends LayHome
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $user = new CategoryModel();
        return $user;
    }

    public function index(){
        $user = new CategoryModel();
        $arr = $user->select();
        $this->assign("arr",$arr);
        return $this->fetch("home/product_category");
    }

    public function product_category(){
        return $this->index();
    }

    public function product_category_add(){
        if(Request::instance()->isPost()){
            $user = new CategoryModel();
            $user->data([
                "category_name"  =>  input('post.category_name'),
                "category_describe" =>  input('post.category_describe'),
                "create_time"   => time()
            ]);
//            echo 111;die;
            if($user->save()){
                $this->success("添加分类成功",url('Category/product_category'));
            }else{
                $this->error("添加分类失败",url('Category/product_category'));
            }
        }
        return $this->fetch("home/product_category_add");
    }

    public function product_list(){
        return $this->fetch("home/product_list");
    }

    public function product_add(){
        return $this->fetch("home/product_add");
    }

    public function product_brand(){
        return $this->fetch("home/product_brand");
    }

}
