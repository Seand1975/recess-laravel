<?php

namespace App\Http\Controllers;

use App\Models\ParticipantPoint;
use Redirect;

class ParticipantPointController extends Controller
{
    public function addPoint ($name,$qty)
    {
        $points = 1*$qty;
        $participant_points = ParticipantPoint::where('name',$name)->get();
        $participant_points[0]->number_of_points += $points;
        $participant_points[0]->save();

        return Redirect::route('orders',[auth()->user()->name])->with('status','Booking made successfully!');
    }
}
