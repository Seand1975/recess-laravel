<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ManageSystem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:system';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates products and users database tables with values from a file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
