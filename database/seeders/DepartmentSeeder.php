<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            'nama' => 'Mining',
        ]);

        DB::table('departments')->insert([
            'nama' => 'HR',
        ]);

        DB::table('departments')->insert([
            'nama' => 'Finance',
        ]);

        DB::table('departments')->insert([
            'nama' => 'Production',
        ]);

        DB::table('departments')->insert([
            'nama' => 'Marketing',
        ]);

        DB::table('departments')->insert([
            'nama' => 'IT',
        ]);
    }
}
