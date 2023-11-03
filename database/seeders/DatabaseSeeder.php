<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Hierarchy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call([
            DepartmentSeeder::class,
            HierarchySeeder::class,
            UserSeeder::class,
        ]);
    }
}
