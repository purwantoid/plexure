<?php

declare(strict_types=1);

namespace PurwantoId\Plexure\Commands;

use Illuminate\Console\Command;

class PlexureCommand extends Command
{
    public $signature = 'plexure';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
