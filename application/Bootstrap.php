<?php
/**
 * @description bootstrap when app is start
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-01-13 14:47:10
 *
 */
use Kovey\Redis\Redis\Redis;
use Kovey\Library\Config\Manager;
use Kovey\Container\Event;

class Bootstrap
{
    public function __initEvents($app)
    {
        $app->getContainer()
            ->on('Redis', function (Event\Redis $event) {
                $redis = new Redis(Manager::get('redis.write.0'));
                $redis->connect();
                return $redis;
            });
    }
}
