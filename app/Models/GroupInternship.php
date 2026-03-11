<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupInternship extends Model
{
    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internships_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'group_internships_id');
    }

    public function studentInternships()
    {
        return $this->hasMany(StudentInternship::class, 'group_internships_id');
    }
}
