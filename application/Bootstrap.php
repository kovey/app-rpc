<?php
/**
 * @description
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

class Bootstrap
{
    public function __initEvents($app)
    {
        $app->getContainer()
            ->on('Redis', function ($poolName) {
                $redis = new Redis(Manager::get('redis.write.0'));
                $redis->connect();
                return $redis;
            });
    }
}
