<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\ProductBooking;
use App\Models\Product;
use App\Models\PerfomanceUpdateRequest;

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
        $line = $ankafile->fgets();
        $work = explode(": ",$line);
        $content = explode(",",$work[1]);//content[e.g name,pass,dob & product for register]: 
        switch ($work[0]) {
          case 'reg':
            //register user
            //write a response to response.txt so that Java can get a response
            info('Register command!!');
            break;
          case 'login':
            //log user in
            //write response
            break;
          case 'del':
            //remove user from database
            //write response
            break;
          case 'post':
            //add to product database if and only if the product name is correct (i.e same as at registration)
            break;
          case 'qty':
            //update quantity of products
            break;
          
          default:
            info("No command.");
            break;
        }
      }
      $ankafile = null;
      //also another for the request file*/
      return 0;
    }
}
