<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicStatus extends Model
{
    protected $table = 'applic_status';

    public function applications()
    {
        return $this->hasMany(Application::class, 'status_id');
    }
}
