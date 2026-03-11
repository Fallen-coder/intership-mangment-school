<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


        public function role()
    {
        return $this->belongsTo(Role::class, 'roles_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companies_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'student_id');
    }

    public function studentInternships()
    {
        return $this->hasMany(StudentInternship::class, 'student_id');
    }

    public function evaluationsGiven()
    {
        return $this->hasMany(Evaluation::class, 'grader_id');
    }
}
