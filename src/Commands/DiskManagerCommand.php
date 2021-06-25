<?php

namespace Athulya\DiskManager\Commands;

use Illuminate\Console\Command;

class DiskManagerCommand extends Command
{
    public $signature = 'disk-manager';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
