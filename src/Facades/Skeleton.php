<?php

namespace VendorName\Laravel\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VendorName\Skeleton\Skeleton::class;
    }
}
