<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function studentInternship()
    {
        return $this->belongsTo(StudentInternship::class);
    }

    public function grader()
    {
        return $this->belongsTo(User::class, 'grader_id');
    }
}
