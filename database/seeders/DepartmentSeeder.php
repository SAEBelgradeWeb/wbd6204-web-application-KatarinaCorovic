<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['title' => 'Covid-19']);
        Department::create(['title' => 'Cardiology']);
        Department::create(['title' => 'Neurology']);
        Department::create(['title' => 'Urology']);
        Department::create(['title' => 'Gastroenterology']);
        Department::create(['title' => 'Dermatology']);
        Department::create(['title' => 'Ophthalmology']);
        Department::create(['title' => 'Paediatrics']);
        Department::create(['title' => 'Laboratory']);
        Department::create(['title' => 'Orthopedics']);
        Department::create(['title' => 'Physiotherapy']);
        Department::create(['title' => 'Surgery']);

        Department::factory(12)->create();

    }
}
