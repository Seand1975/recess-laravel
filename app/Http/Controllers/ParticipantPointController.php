<?php

namespace App\Http\Controllers;

use app\Models\ParticipantPoint;

class ParticipantPointController extends Controller
{
    public function addPoint ($point)
    {
        $participant_points = ParticipantPoint::all();
        $participant_points->number_of_points += $point;
        $participant_points->number_of_points->save();
    }
}
