<?php
namespace App\HttpController;
use App\Utility\SmartyRender;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;
use EasySwoole\Template\Render;

class Common extends Controller
{

    public function index()
    {
        // TODO: Implement index() method.
        $this->response()->write(getcwd());

    }

    function render($template,array $vars=[])
    {
        $engine = new SmartyRender();
        $render = Render::getInstance();
        $render->getConfig()->setRender($engine);
        $content = $engine->render($template, $vars);
        $this->response()->write($content);
    }


    function onException(\Throwable $throwable): void
    {
        var_dump($throwable->getMessage());
    }

    protected function actionNotFound(?string $action): void
    {
        $this->response()->withStatus(Status::CODE_NOT_FOUND);
        $this->response()->write('action not found');
    }
}