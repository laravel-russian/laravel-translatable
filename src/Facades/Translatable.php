<?php

namespace LaravelRussian\Translatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelRussian\Translatable\Translatable
 */
class Translatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable';
    }
}
