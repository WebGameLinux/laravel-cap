<?php

namespace Imgk\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imgk\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
