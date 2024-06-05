<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        Department::create(['name' => 'IT']);
        Department::create(['name' => 'HR']);
        Department::create(['name' => 'Finance']);
    }
}
