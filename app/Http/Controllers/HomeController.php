<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Series;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dynamicimage(){
        $seriesImage = Series::take(5)->get();
        $courseimage    = Course::take(6)->get();
        return view('welcome', [
            'seriesname' => $seriesImage,
            'courseimage'   => $courseimage
        ]);

    }
}
