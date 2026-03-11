<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterStatus extends Model
{
    protected $table = 'inter_status';

    public function studentInternships()
    {
        return $this->hasMany(StudentInternship::class);
    }
}
