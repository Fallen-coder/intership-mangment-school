<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
public function run(): void
{
    \App\Models\Role::insert([['name' => 'Admin'], ['name' => 'Student'], ['name' => 'Company'], ['name' => 'Teacher']]);
    \App\Models\ApplicStatus::insert([['name' => 'Pending'], ['name' => 'Accepted'], ['name' => 'Rejected']]);
    \App\Models\InterStatus::insert([['name' => 'Ongoing'], ['name' => 'Completed'], ['name' => 'Terminated']]);
    \App\Models\Grading::insert([['name' => 'Pass/Fail'], ['name' => '1-10 Scale'], ['name' => 'A-F Letter']]);
}
}
