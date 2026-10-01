<?php
namespace Hubmais\HClient\Facades;

use Illuminate\Support\Facades\Facade;

class HClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'h-client';
    }
}