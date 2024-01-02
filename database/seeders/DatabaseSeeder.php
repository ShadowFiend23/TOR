<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EmployeeRoles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
                "userID"    => "admin",
                "password"  => bcrypt('admin'),
                "role"      => 0
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }

        $employeeRoles = [
            [
                "code" => "department-head",
                "name" => "Department Head",
                "route"=> "department"
            ],
            [
                "code" => "evaluator",
                "name" => "Evaluator",
                "route"=> "evaluator"
            ],
            [
                "code" => "registrar",
                "name" => "Registrar",
                "route"=> "registrar"
            ],
            [
                "code" => "saso",
                "name" => "SASO",
                "route"=> "saso"
            ]
        ];

        foreach($employeeRoles as $role){
            EmployeeRoles::create($role);
        }
    }
}
