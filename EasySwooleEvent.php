<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;


use App\Process\Task;
use App\Utility\Pool\MysqlPool;
use Co\Mysql;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\Template\Config;
use EasySwoole\Template\Render;
use EasySwoole\Template\RenderInterface;

use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\EasySwoole\Logger;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        // TODO: Implement initialize() method.
        date_default_timezone_set('Asia/Shanghai');
<<<<<<< HEAD

=======
        //在全局的主服务中创建事件中，实例化该Render,并注入你的驱动配置
        //Render::getInstance()->getConfig()>setRender(new \R());
>>>>>>> 2ae4a80a5ede083ea7a0b5b37bce921f4e4459df
        //
//        $mysqlConf = PoolManager::getInstance()->register(MysqlPool::class, Config::getInstance()->getConf('MYSQL.POOL_MAX_NUM'));
//        if($mysqlConf===null){
//            //当返回null时,代表注册失败,无法进行再次的配置修改
//            //注册失败不一定要抛出异常,因为内部实现了自动注册,不需要注册也能使用
//            throw new \Exception('注册失败!');
//        }
//        //设置其他参数
//        $mysqlConf->setMaxObjectNum(20)->setMinObjectNum(5);

    }

    public static function mainServerCreate(EventRegister $register)
    {
        // TODO: Implement mainServerCreate() method.
        //在全局的主服务中创建事件中，实例化该Render,并注入你的驱动配置
        Render::getInstance()->getConfig()>setRender(new R());

//        $one_process = new \App\Components\Process\One("processName",time(),false,2,true);
//        ServerManager::getInstance()->getSwooleServer()->addProcess($one_process->getProcess());

        //3.x-async
//        ServerManager::getInstance()->getSwooleServer()->addProcess((new Task('processTask'))->getProcess());

        ################### mysql 热启动   #######################
//        $register->add($register::onWorkerStart, function (\swoole_server $server, int $workerId) {
//            if ($server->taskworker == false) {
//                Logger::getInstance()->console("false onWorkerStart:".$workerId);
//                //每个worker进程都预创建连接
//                PoolManager::getInstance()->getPool(MysqlPool::class)->preLoad(5);//最小创建数量
//            }else{
//                Logger::getInstance()->console("true onWorkerStart:".$workerId);
//            }
//        });

    }

    public static function onRequest(Request $request, Response $response): bool
    {
        // TODO: Implement onRequest() method.
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
        Logger::getInstance()->console("afterRequest string getBody".$response->getBody());
    }
}
<<<<<<< HEAD

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
=======
>>>>>>> 2ae4a80a5ede083ea7a0b5b37bce921f4e4459df
