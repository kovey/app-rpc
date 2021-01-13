<?php
/**
 * @description
 *
 * @package
 *
 * @author kovey
 *
 * @time 2021-01-13 14:49:41
 *
 */
namespace Module;

#[\Attribute]
class Hello
{
    public function world(string $welcome)
    {
        $this->redis->set('kovey', $welcome);
        return $this->redis->get('kovey');
    }
}
