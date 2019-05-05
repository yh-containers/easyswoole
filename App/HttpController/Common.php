<?php
namespace App\HttpController;
use EasySwoole\Http\AbstractInterface\Controller;

class Common extends Controller
{

    public function index()
    {

    }

    function onException(\Throwable $throwable): void
    {
        //直接给前端响应500并输出系统繁忙
        $this->response()->withStatus(Status::CODE_INTERNAL_SERVER_ERROR);
        $this->response()->write('系统繁忙,请稍后再试 ');
    }
}