<?php

namespace Wtone\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wtone\Captcha
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
