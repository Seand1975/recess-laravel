<?php

namespace App\Http\Controllers;

use App\Models\ParticipantPoint;
use App\Models\ProductBooking;
use Redirect;

class ParticipantPointController extends Controller
{
    public function addPoint ($name,$points)
    {
        $point = new ParticipantPoint;
        $point->name = $name;
        $point->number_of_points = $points;
        $point->save();

        return Redirect::route('orders',[auth()->user()->name])->with('status','Booking made successfully!');
    }
}
