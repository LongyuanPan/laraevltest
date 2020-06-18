<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2019-01-10
 * Time: 14:06
 */

namespace Pan\laraveltest;

use Illuminate\Config\Repository;

class Test
{

    protected $config;

    /**
     * 构造方法
     */
    public function __construct(Repository $config)
    {
        $this->config = $config->get('avatar');
    }

    public function test1()
    {
        dump("参数值1:" . $this->config['param1']);
    }

}