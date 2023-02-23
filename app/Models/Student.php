<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function getProject()
    {
        return $this->belongsToMany(Project::class,'students_projects');
    }

    public function getProjectByMorph()
    {
        return $this->morphMany(Project::class,'projectable');
    }
}
