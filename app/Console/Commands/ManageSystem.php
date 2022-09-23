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
        $path = dirname(__DIR__,4)."\\recess-java\anka.txt";
        $ankafile = new SplFileObject($path);
        while (!$ankafile->eof()) {
          echo $ankafile->fgets();//actually here we should get each line by the fgets() function then work on our database
        }
        $ankafile = null;
        //also another for the request file
        return 0;
    }
}
