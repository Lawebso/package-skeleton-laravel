<?php

namespace VendorName\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Laravel\Skeleton
 */
class Skeleton extends Facade: string
{
    protected static function getFacadeAccessor()
    {
        return \VendorName\Laravel\Skeleton::class;
    }
}
