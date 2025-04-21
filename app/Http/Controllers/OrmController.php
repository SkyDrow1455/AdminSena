<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Apprentice;
use App\Models\Computer;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consultas(){

        //$course = Course::find(1);
        //return $course->apprentices;

        $course = Course::find(1);
        return $course->teacher;
    }


}
