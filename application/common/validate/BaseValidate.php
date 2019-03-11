<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8
 * Time: 9:36
 */
namespace app\common\validate;


use think\Request;
use think\Validate;
use think\Exception;

class BaseValidate extends Validate
{
    public function goCheck($data = ''){
        //实例化请求对象
        $requestObj = Request::instance();
        //获取数据，如果为空，获取请求的参数
        empty($data)&&$data = $requestObj->param();
        if($this->check($data)){
            return true;
        }else{
            $error = $this->getError();
            throw new Exception($error);
        }

    }

}

