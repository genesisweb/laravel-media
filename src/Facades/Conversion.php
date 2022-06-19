<?php

namespace GenesisWeb\Media\Facades;

use Illuminate\Support\Facades\Facade;
use GenesisWeb\Media\ConversionRegistry;

class Conversion extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConversionRegistry::class;
    }
}
