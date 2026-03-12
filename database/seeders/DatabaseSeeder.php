<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
public function run(): void
{
    \App\Models\Role::insert([['name' => 'Admin'], ['name' => 'Student'], ['name' => 'Company'], ['name' => 'Teacher']]);
        DB::table('applic_status')->insert([
            ['name' => 'Pending'],
            ['name' => 'Approved'],
            ['name' => 'Rejected'],
        ]);

        DB::table('inter_status')->insert([
            ['name' => 'Active'],
            ['name' => 'Completed'],
            ['name' => 'Cancelled'],
        ]);

        DB::table('grading')->insert([
            ['name' => 'Excellent'],
            ['name' => 'Good'],
            ['name' => 'Average'],
            ['name' => 'Fail'],
        ]);
            DB::table('groups')->insert([
            ['name' => 'Group A'],
            ['name' => 'Group B'],
            ['name' => 'Group C'],
        ]);
        DB::table('companies')->insert([
            [
                'name' => 'Google',
                'description' => 'Technology Company'
            ],
            [
                'name' => 'Microsoft',
                'description' => 'Software Company'
            ],
            [
                'name' => 'Amazon',
                'description' => 'Cloud and Ecommerce'
            ]
        ]);

        DB::table('internships')->insert([
            [
                'name' => 'Software Engineering Internship',
                'goals' => 'Learn backend development',
                'grading_id' => 1
            ],
            [
                'name' => 'Data Analyst Internship',
                'goals' => 'Work with datasets and dashboards',
                'grading_id' => 2
            ]
        ]);

        DB::table('users')->insert([
    [
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'remember_token' => Str::random(10),
        'roles_id' => 1,
        'group_id' => 1,
        'companies_id' => null,
    ],
    [
        'name' => 'Manager User',
        'email' => 'manager@example.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'remember_token' => Str::random(10),
        'roles_id' => 2,
        'group_id' => 1,
        'companies_id' => 1,
    ],
    [
        'name' => 'Student User',
        'email' => 'student@example.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'remember_token' => Str::random(10),
        'roles_id' => 3,
        'group_id' => 2,
        'companies_id' => null,
    ]
]);
}
}
