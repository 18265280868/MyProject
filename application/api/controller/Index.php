<?php
namespace app\api\controller;

class Index
{
    public function dgg()
    {
        echo 1;die;
        // 简单的，后面要验证什么自己写，大概拉去的就是这个代码，忽略的呢
        shell_exec('cd ../;git pull');
    }
}
