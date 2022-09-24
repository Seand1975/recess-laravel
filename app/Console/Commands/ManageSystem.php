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

      try {
        $ankafile = fopen($path."anka.txt","r+");
        $cronfile = fopen($path."cron.txt","r+");
        $requestfile = fopen($path."Request.txt","r+");
        while ($ankafile!=null && ($line = fgets($ankafile))!==false) {
          sleep(3);
          $work = explode(": ",$line);
  
          $content = explode(",",$work[1]);//content[e.g name,pass,dob & product for register]: 
  
          switch ($work[0]) {
            case 'reg':# name	password	date_of_birth	product	
              $check = Participant::where('name',$content[0])->first();
              if ($check == null) {
                $participant_->name = $content[0];
                $participant_->password = $content[1];
                $participant_->date_of_birth = $content[2];
                $participant_->product = $content[3];
                $participant_->save();
                fwrite($cronfile,"session:".$content[0].",".$content[3]."\n");
                fwrite($cronfile,"success:Registered and Logged in!\n");
              }else {
                fwrite($cronfile,"error:".$content[0]." already exists.\n");
              }
              break;
            case 'login':# name	password
              $check = Participant::where('name',$content[0])->where('password',$content[1])->first();
              if ($check->name == $content[0] && $check->password == $content[1]) {
                fwrite($cronfile,"session:".$content[0].",".$content[3]."\n");
                fwrite($cronfile,"success:Logged in successfully!\n");
              }
              break;
            case 'del':# user
              $del = Participant::where('name',$content[0])->first();
              $del->destroy();
              break;
            case 'post':# add to product database if and only if the product name is correct (i.e same as at registration)
              # sessname name desc price
              # product_name product_description available_quantity rate_per_item posted_by created_at updated_at
              $getter = Participant::where('name',$content[0])->where('product',$content[1])->first();
              if ($getter != null) {
                $product_->product_name = $content[1];
                $product_->product_description = implode(" ",explode("-",$content[2]));
                $product_->available_quantity = 1;
                $product_->rate_per_item = $content[3];
                $product_->save();
                fwrite($cronfile,"success:Posted successfully!\n");
              }
              break;
            case 'qty':
              info('Quantity command!!');
              $getter = Product::where('posted_by',$content[0])->where('product_name',$content[1])->first();
              if ($getter != null) {
                $getter->available_quantity = $content[2];
                $getter->save();
              }
              fwrite($cronfile,"success:Updated quantity successfully!\n");
              //update quantity of products
              break;
            
            default:
              info("No command.");
              break;
          }
        }
        unlink($path."anka.txt");
        unlink($path."cron.txt");
        fclose($ankafile);
        fclose($cronfile);

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
              $participant = PerfomanceUpdateRequest::where('name',$details[0])->first();
              if ($participant->name == $details[0]) {
                $participant->request_time = $details[1];
                $participant->save();
              }else {
                $req_->name = $details[0];
                $req_->request_time = $details[1];
                $req_->request_response_time = $date_;
                $req_->save();
                $points = ParticipantPoint::where('name',$details[0])->first();
                $answer = "response=Name:".$points->name.",Points:".$points->number_of_points."\n";
                fwrite($requestfile,$answer);
            }
              break;
            default:
              info("No request.");
              break;
          }
        }
        unlink($path."Request.txt");
        fclose($requestfile);
  
      } catch (\Throwable $th) {
        info("Nothing");
      } 
      return 0;
    }
}
