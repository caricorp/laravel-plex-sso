<?php

namespace Cari\PlexAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cari\PlexAuth\PlexAuth
 */
class PlexAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cari\PlexAuth\PlexAuth::class;
    }
}
