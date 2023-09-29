<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_MAIL'),
            'password' => Hash::make(env('ADMIN_PASS')),
        ];

        DB::table('users')->insert($data);
    }
}
