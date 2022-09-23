<?php

namespace App\Http\Controllers;

use App\Models\ParticipantPoint;

class ParticipantPointController extends Controller
{
    public function addPoint ($name,$points)
    {
        $participant_points = ParticipantPoint::where('name',$name);
        $participant_points->number_of_points += $points;
        $participant_points->number_of_points->save();
    }
}
