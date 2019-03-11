<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/7
 * Time: 18:38
 */
namespace app\common\validate;


class GoodValidate extends BaseValidate
{


    protected $rule = [
        "id" => "require|min:5|fin_field"
//      "company_name" => "request|min:5|fin_field"
    ];

    /*
     * 验证公司名称
     * 规则：字段不能少于5个字段，全部是汉字，不能含有特殊字符
     */
    public function fin_field($value,$rule='',$data='',$file=''){
        if(!$value>0){
            return true;
        }else{
            return $msg =  $file."大于0";
        }


    }





}