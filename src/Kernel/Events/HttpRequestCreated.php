<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2021/1/12
 * Time: 上午11:35
 */

namespace EasyWeChat\Kernel\Events;


class HttpRequestCreated
{
    /**
     * @var array
     */
    public $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }
}