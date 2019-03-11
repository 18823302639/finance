<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 16:02
 */

namespace app\admin\controller;

use think\Controller;

class LayHome extends Controller
{


    public function _meta()
    {
        return $this->fetch("public/_meta");
    }

    public function _header()
    {
        return $this->fetch("public/_header");
    }

    public function _menu()
    {
        return $this->fetch("public/_menu");
    }

    public function _footer()
    {
        return $this->fetch("public/_footer");
    }
}