<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Coordinator;
class Project extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function latestStudent()
    {
        return $this->hasOne(Student::class)->latestOfMany();
    }

    public function oldestStudent()
    {
        return $this->hasOne(Student::class)->oldestOfMany();
    }

    public function getProjectCord()
    {
        return $this->hasOneThrough(Coordinator::class,Student::class);
    }

    public function getProjectCords()
    {
        return $this->hasManyThrough(Coordinator::class,Student::class);
    }


}
