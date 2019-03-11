<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function isMobile()
{
    $mobilebrowser_list = array(
        'iphone',
        'android',
        'phone',
        'wap',
        'netfront',
        'java',
        'opera mobi',
        'opera mini',
        'ucweb',
        'windows ce',
        'symbian',
        'series',
        'webos',
        'sony',
        'blackberry',
        'dopod',
        'nokia',
        'samsung',
        'palmsource',
        'xda',
        'pieplus',
        'meizu',
        'midp',
        'cldc',
        'motorola',
        'foma',
        'docomo',
        'up.browser',
        'up.link',
        'blazer',
        'helio',
        'hosin',
        'huawei',
        'novarra',
        'coolpad',
        'webos',
        'techfaith',
        'palmsource',
        'alcatel',
        'amoi',
        'ktouch',
        'nexian',
        'ericsson',
        'philips',
        'sagem',
        'wellcom',
        'bunjalloo',
        'maui',
        'smartphone',
        'iemobile',
        'spice',
        'bird',
        'zte-',
        'longcos',
        'pantech',
        'gionee',
        'portalmmm',
        'jig browser',
        'hiptop',
        'benq',
        'haier',
        '^lct',
        '320x320',
        '240x320',
        '176x220'
    );
    $useragent = strtolower($_SERVER ['HTTP_USER_AGENT']);
    $mobile_change = false;
    if (!empty ($useragent)) {
        foreach ($mobilebrowser_list as $v) {
            if (stristr($useragent, $v) !== false) {
                return true;
            }
        }
    }
    return false;
}
