<?php

namespace App\HttpController;

use EasySwoole\Component\Di;
use EasySwoole\Template\Render;
class Index extends Common
{
//    public static function initialize()
//    {
//        Di::getInstance()->set(SysConst::HTTP_CONTROLLER_MAX_DEPTH,5);
//    }
//    function index()
//    {
//        $this->writeJson(200, $this->request()->getAttributes(), 'getAttributes  ');
//        $this->writeJson(200, $this->request()->getRequestParam(), 'getRequestParam  ');
//        $this->writeJson(200, $this->request()->getCookieParams(), 'getCookieParams  ');
//        $this->writeJson(200, $this->request()->getCookieParams(), 'getCookieParams  ');
//        $this->response()->write('getMethod:'.$this->request()->getMethod());
//        return '/test';
//    }
 



    public function index()
    {
	    $this->render('a.html');

    }

    function test()
    {
        $this->response()->write('this is test');
        return '/test2';//当执行完test方法之后,返回/test2,让框架继续调度/test2方法
    }

    function test2()
    {
        $this->response()->write('this is test2');
        return true;
    }

    public function say()
    {
        $this->response()->write('say hello world');
        // TODO: Implement index() method.
    }

    public function set_cookie()
    {
        $req_name = $this->request()->getRequestParam('name');
        $bool = $this->response()->setCookie('name',$req_name);
        $this->response()->write($bool);
        $this->response()->end();
    }

    public function get_cookie()
    {
        $this->writeJson(200, $this->response()->getCookies(), 'getCookies  ');
        $this->writeJson(200, $this->request()->getCookieParams(), 'getCookieParams  ');
    }

    public function set_session()
    {
        $req_name = $this->request()->getRequestParam('name');
        $this->session()->start();
        $bool = $this->session()->set('session_var',$req_name);
        $this->response()->write($bool);
        $this->response()->end();
    }

    public function get_session()
    {
        var_dump($this->session()->sid());
        $this->writeJson(200, $this->session()->get('session_var'), 'get_session  ');
        $this->writeJson(200, $this->request()->getCookieParams(), 'getCookieParams  ');
    }

    public function temple_test()
    {
//        $this->response()->write(::getInstance()->render)
	echo '123123123'.PHP_EOL;
	echo Render::getInstance()->render('a.html').'|||.'.PHP_EOL;
	echo 'aaaaaa'.PHP_EOL;
        $this->response()->write(Render::getInstance()->getConfig()->getTempDir());
        print_r(Render::getInstance()->render('index.tpl'));
    }

    function reload(){
        Render::getInstance()->restartWorker();
        $this->response()->write(1);
    }

    public function test_process()
    {
//        ServerManager::getInstance()->getSwooleServer()vendor/easyswoole/swoole-ide-helper/dump.php
        ServerManager::getInstance()->getSwooleServer()->getProcess($one_process->getProcess());
    }


}
