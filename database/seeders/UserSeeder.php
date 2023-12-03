<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'department_id' => 2,
            'hierarchy_id' => 1,
            'username' => 'aldyimam',
            'email' => 'aldyimam@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'Direktur',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 3,
            'hierarchy_id' => 2,
            'username' => 'claraclarita',
            'email' => 'claraclarita@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'VP',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 6,
            'hierarchy_id' => 3,
            'username' => 'reyhanHafiz',
            'email' => 'reyhanHafiz@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'GM',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 6,
            'hierarchy_id' => 1,
            'username' => 'bagasmahda',
            'email' => 'bagasmahda@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'SR',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,         
        ]);

        DB::table('users')->insert([
            'department_id' => 6,
            'hierarchy_id' => 2,
            'username' => 'fathirizqi',
            'email' => 'fathirizqi@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'Chief',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 5,
            'hierarchy_id' => 3,
            'username' => 'alvianta',
            'email' => 'alvianta@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'Staff',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 1,
            'hierarchy_id' => 1,
            'username' => 'irfanhanif',
            'email' => 'irfanhanif@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'Staff',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);

        DB::table('users')->insert([
            'department_id' => 4,
            'hierarchy_id' => 2,
            'username' => 'radityajavas',
            'email' => 'radityajavas@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '2123123213',
            'jabatan' => 'Staff',
            'contact' => '213123123',
            'alamat' => 'jalan jalan',
            'tanggal_masuk' => Carbon::create('2000', '01', '01'),
            'salary' => 1200,
        ]);
    }
}
