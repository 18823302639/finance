<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8
 * Time: 14:37
 */

namespace app\common\exception;

class BaseException extends Exception
{
    public $code = 400;
    public $msg  = "参数错误";
    public $errorcode = 10000;

}