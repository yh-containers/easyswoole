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
    }

    public function onReceive(string $str)
    {
        // TODO: Implement onReceive() method.
    }

}