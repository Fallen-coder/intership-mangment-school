<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     public function users()
    {
        return $this->hasMany(User::class, 'companies_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'companies_id');
    }

    public function studentInternships()
    {
        return $this->hasMany(StudentInternship::class, 'companies_id');
    }
}
