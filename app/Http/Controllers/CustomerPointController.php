<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPointController extends Controller
{
    public function addPoint(point)
    {
        customer_point = 0;
        customer_point += point;
        return view('customerpoint/index');
    }
}
