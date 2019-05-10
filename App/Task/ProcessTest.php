<?php
/**
 * Created by PhpStorm.
 * User: Tioncico
 * Date: 2019/3/7 0007
 * Time: 15:11
 */
namespace App\Task;
use EasySwoole\EasySwoole\Swoole\Task\AbstractAsyncTask;

class ProcessTest extends AbstractAsyncTask
{
    protected function finish($result, $task_id)
    {
        echo "完成数据result:{$result},task_id:{$task_id}".PHP_EOL;
        echo "执行模板异步任务完成\n";
        // TODO: Implement finish() method.
    }
    protected function run($taskData, $taskId, $fromWorkerId, $flags = null)
    {
        echo "完成数据taskData:{$taskData},taskId:{$taskId},fromWorkerId:{$fromWorkerId},flags:{$flags}|".PHP_EOL;
        echo "执行模板异步任务中\n";
        return true;//必须要return true,代表完成
        // TODO: Implement run() method.
    }
}