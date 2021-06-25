<?php

namespace Athulya\DiskManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Athulya\DiskManager\DiskManager
 */
class DiskManagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'disk-manager';
    }
}
