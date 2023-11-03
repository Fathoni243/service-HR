<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HierarchySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hierarchies')->insert([
            'nama' => 'HO',
        ]);

        DB::table('hierarchies')->insert([
            'nama' => 'Region',
        ]);

        DB::table('hierarchies')->insert([
            'nama' => 'Field',
        ]);
    }
}
