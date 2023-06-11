<?php

namespace VendorName\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VendorName\Laravel\Skeleton::class;
    }
}
