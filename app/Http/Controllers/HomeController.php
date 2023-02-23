<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Video;
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

    public function show_project(){
        $project = Student::find(2)->getProject;
        return $project;
    }

    public function getImageComment()
    {
        $comment = Image::find(1)->comment;
        return $comment;
    }

    public function getImageComments()
    {
        $comments = Image::find(1)->comments;
        return $comments;
    }

    public function getVideoComment()
    {
        $comment = Video::find(1)->comment;
        return $comment;
    }

    public function getVideoComments()
    {
        $comments = Video::find(1)->comments;
        return $comments;
    }
    public function getImageLatestComment()
    {
        $comment = Image::find(1)->getImageLatestComment;
        return $comment;
    }

    public function getVideoOldestComment()
    {
        $comment = Video::find(1)->getVideoOldestComment;
        return $comment;
    }

}
