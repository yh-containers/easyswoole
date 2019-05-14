<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/14
 * Time: 22:45
 */

namespace App\Utility\Pool;

use EasySwoole\Mysqli\Config;
use EasySwoole\Mysqli\Mysqli;
use EasySwoole\Component\Pool\AbstractPool;

class MysqlPool extends AbstractPool
{
    protected function createObject()
    {
        // TODO: Implement createObject() method.
        //当连接池第一次获取连接时,会调用该方法
        //我们需要在该方法中创建连接
        //返回一个对象实例
        //必须要返回一个实现了AbstractPoolObject接口的对象
        echo 'MysqlPool:__'.PHP_EOL;
        $conf = \EasySwoole\EasySwoole\Config::getInstance()->getConf("MYSQL");
        $dbConf = new Config($conf);
        return new MysqlObject($dbConf);
    }

}