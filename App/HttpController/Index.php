<?php

namespace App\HttpController;

class Index extends Common
{
    function index()
    {
        var_dump($this->request()->getAttributes());
        var_dump($this->request()->getRequestParam());
        var_dump($this->request()->getMethod());
        var_dump($this->request()->getCookieParams());
        $this->writeJson(200, [], 'success');
        return '/test';
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
}