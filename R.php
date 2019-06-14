<?php
use EasySwoole\Template\Config;
use EasySwoole\Template\Render;
use EasySwoole\Template\RenderInterface;

class R implements RenderInterface
{

    public function render(string $template, array $data = [], array $options = []):?string
    {
        return 'asas';
    }

    public function afterRender(?string $result, string $template, array $data = [], array $options = [])
    {
        // TODO: Implement afterRender() method.
    }

    public function onException(Throwable $throwable):string
    {
        return $throwable->getMessage();
    }
}