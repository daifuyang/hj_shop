<?php


namespace app\mobile\controller;


use think\Controller;

class HomeBaseController extends Controller
{
    /**
     * 前置方法
     * 获取默认主题
     * @Author:Frank Dai
     * date:  2019-02-13
     **/
    protected $beforeActionList = [
        'getTheme',
        'getTmpl',
    ];

    //获取主题路径
    protected function getTheme()
    {
        define('ADMIN_THEME','index/mobile_default/');
        //获取默认模板路径
        $view_path = config('template.view_path').ADMIN_THEME;
        //切换视图路径
        $this->view->config('view_path', $view_path);
    }

    //修改静态路径地址
    protected function getTmpl()
    {
        //获取项目host
        $host = request()->server()['REQUEST_SCHEME'].'://'.request()->host();
        $tmpl =  $host.'/themes/'.ADMIN_THEME.'public';
        $arr = [
            '__TMPL__'=> $tmpl,
            '__STATIC__'=> $host.'/static'
        ];
        //重新渲染列表
        $this->view->config('tpl_replace_string',  $arr);
    }
}