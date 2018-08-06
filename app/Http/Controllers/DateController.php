<?php

namespace samenta\Http\Controllers;

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function getDate()
    {
        $date =new \DateTime();
        return $date->format('d-m-y');
    }
    public function carbon()
    {
//     $carbon = Carbon::now()->addDay('-14');
//     $carbon = Carbon::now()->addMonth('-1');
//     $carbon = Carbon::now()->addYear('-1');
     $carbon = Carbon::now()->subMonth('1'); //reverse of add
//     $carbon = Carbon::now()->Yesterday();
//     $carbon = Carbon::now()->Tomorrow();
     return $carbon->diffForHumans();
    }
}

