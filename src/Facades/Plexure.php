<?php

declare(strict_types=1);

namespace PurwantoId\Plexure\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PurwantoId\Plexure\Plexure
 */
class Plexure extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PurwantoId\Plexure\Plexure::class;
    }
}
