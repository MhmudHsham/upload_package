<?php

namespace mhmudhsham\upload_package\Facades;

use Illuminate\Support\Facades\Facade;

class upload_package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'upload_package';
    }
}
