<?php

namespace VendorName\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Laravel\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VendorName\Laravel\Skeleton::class;
    }
}
