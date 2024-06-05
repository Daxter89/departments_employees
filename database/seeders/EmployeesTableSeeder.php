<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        Employee::create(['name' => 'Alice', 'position' => 'Developer', 'department_id' => 1]);
        Employee::create(['name' => 'Bob', 'position' => 'Analyst', 'department_id' => 2]);
        Employee::create(['name' => 'Charlie', 'position' => 'Manager', 'department_id' => 3]);
    }
}
