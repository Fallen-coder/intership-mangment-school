<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
   public function grading()
    {
        return $this->belongsTo(Grading::class);
    }

    public function groupInternships()
    {
        return $this->hasMany(GroupInternship::class, 'internships_id');
    }
}
