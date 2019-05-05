<?php

namespace App\HttpController;
use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{
    public function index()
    {
        $this->response()->write('hello world');
        // TODO: Implement index() method.
    }
    public function say()
    {
        $this->response()->write('say hello world');
        // TODO: Implement index() method.
    }
}