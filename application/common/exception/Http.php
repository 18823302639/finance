<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8
 * Time: 14:24
 */
namespace app\common\exception;


use Exception;
use think\exception\Handle;
use think\exception\HttpException;

class Http extends Handle
{
    public function render(Exception $e){
        //参数错误验证
        if($e instanceof ValidateException){
            return json($e->getError(),422);
        }
    }
}
