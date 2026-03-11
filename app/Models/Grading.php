<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grading extends Model
{
    public function internships()
    {
        return $this->hasMany(Internship::class, 'grading_id');
    }
}
