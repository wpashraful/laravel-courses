<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($id){
        $courseid = Course::with(['platform', 'topics', 'authors', 'series'])->findOrFail($id);
        return  $courseid;
    }
}
