<?php

namespace App\HttpController;

class Index extends Common
{
    function index()
    {
        $this->writeJson(200, $this->request()->getAttributes(), 'getAttributes  ');
        $this->writeJson(200, $this->request()->getRequestParam(), 'getRequestParam  ');
        $this->writeJson(200, $this->request()->getCookieParams(), 'getCookieParams  ');
        $this->response()->write('getMethod:'.$this->request()->getMethod());
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