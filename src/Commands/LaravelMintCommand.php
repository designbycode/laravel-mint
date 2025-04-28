<?php

namespace Designbycode\LaravelMint\Commands;

use Illuminate\Console\Command;

class LaravelMintCommand extends Command
{
    public $signature = 'laravel-mint';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
