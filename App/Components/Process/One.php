<?php
namespace App\Components\Process;

use EasySwoole\Component\Process\AbstractProcess;
use EasySwoole\EasySwoole\Logger;

class One extends AbstractProcess
{
    public function run($arg)
    {
        // TODO: Implement run() method.
        Logger::getInstance()->console($this->getProcessName()." start");
        while (1){
            \co::sleep(5);
            Logger::getInstance()->console($this->getProcessName()." run");
        }
    }

    public function onShutDown()
    {
        // TODO: Implement onShutDown() method.
        Logger::getInstance()->console(date('Y-m-d H:i:s')." onShutDown");
    }

    public function onReceive(string $str)
    {
        // TODO: Implement onReceive() method.
        Logger::getInstance()->console($str." string");
    }

}