<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Participant;
use App\Models\ParticipantPoint;
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
      $participant_ = new Participant;
      $product_ = new Product;
      $req_ = new PerfomanceUpdateRequest;

      $path = dirname(__DIR__,4)."\\recess-java\\";
      $ankafile = fopen($path."anka.txt","r+");
      $cronfile = fopen($path."cron.txt","a+");
      $requestfile = fopen($path."Request.txt","a+");
      while (($line = fgets($ankafile))!==false) {

        $work = explode(": ",$line);

        $content = explode(",",$work[1]);//content[e.g name,pass,dob & product for register]: 

        switch ($work[0]) {
          case 'reg':# name	password	date_of_birth	product	
            $check = ParticipantPoint::where('name',$content[0]);
            if (count($check)==0) {
              $participant_->name = $content[0];
              $participant_->password = $content[1];
              $participant_->date_of_birth = $content[2];
              $participant_->product = $content[3];
              $participant_->save();
              fwrite($cronfile,"session:".$content[0].",".$content[3]);
              fwrite($cronfile,"success:Registered and Logged in!");
            }else {
              fwrite($cronfile,"error:".$content[0]." already exists.\n");
            }
            break;
          case 'login':# name	password
            $check = Participant::where('name',$content[0])->where('password',$content[1]);
            if (count($check)!=0) {
              fwrite($cronfile,"session:".$content[0].",".$content[3]);
              fwrite($cronfile,"success:Logged in successfully!");
            }
            break;
          case 'del':# user
            $del = Participant::where('name',$content[0]);
            $del->delete();
            break;
          case 'post':# add to product database if and only if the product name is correct (i.e same as at registration)
            # sessname name desc price
            $getter = Participant::where('name',$content[0])->where('product',$content[1])->first();
            break;
          case 'qty':
            info('Quantity command!!');
            //update quantity of products
            break;
          
          default:
            info("No command.");
            break;
        }//
      }
      fclose($ankafile);

      while (($line = fgets($requestfile))!==false) {
        //name	request_answer	request_time	request_response_time	request_response_seen	
        $content = explode(":",$line);
        $details = explode(",",$content[1]);# details[0] is name, details[1] is request_time
        $date_ = date('Y/m/d');
        $answer = "";
        switch ($content[0]) {
          case 'Seen':
            $participant = PerfomanceUpdateRequest::where('name',$details[0])->get();
            $participant[0]->request_response_seen = $details[1];
            break;
          case 'Request':
            $participant = PerfomanceUpdateRequest::where('name',$details[0])->get();
            if (count($participant)!=0) {
              $participant[0]->request_time = $details[1];
              $participant[0]->save();
            }else {
              $req_->name = $details[0];
              $req_->request_time = $details[1];
              $req_->request_response_time = $date_;
              $req_->save();
            }
            break;
          default:
            info("No request.");
            break;
        }
      }
      fclose($requestfile);

      return 0;
    }
}
