<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HomeController extends Controller
{
    public function getProject() 
    {
        //Belongs To:
        $project = Student::find(20)->project;
        return $project;
    }

    public function getStudent()
    {
        //hasOne
        $student = Project::find(5)->student;
        return $student;
    }
    public function getLatestStudent()
    {
        //hasOneOfMany
        $student = Project::find(5)->latestStudent;
        return $student;
    }

    public function getOldestStudent()
    {
        //hasOneOfMany
        $student = Project::find(5)->oldestStudent;
        return $student;
    }

    public function getStudents()
    {
        //hasMany
        $student = Project::find(5)->students;
        return $student;
    }

    public function getProjectCord(){
        //hasOneThrow
        $cord = Project::find(5)->getProjectCord;
        return $cord;
    }

    public function getProjectCords()
    {
        //hasManyThrow
        $cords = Project::find(1)->getProjectCords;
        return $cords;
    }


}
