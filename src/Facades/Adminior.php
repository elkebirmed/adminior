<?php

namespace Elkebirmed\Adminior\Facades;

use Illuminate\Support\Facades\Facade;

class Adminior extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'adminior';
    }
}
