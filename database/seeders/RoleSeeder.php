<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'status'=>'active',
                'password'=>\bcrypt('12345678'),
            ],
            [
                'name'=>'manager',
                'email'=>'manager@gmail.com',
                'role'=>'manager',
                'status'=>'active',
                'password'=>\bcrypt('12345678'),
            ],
            [
                'name'=>'waiter',
                'email'=>'waiter@gmail.com',
                'role'=>'waiter',
                'status'=>'active',
                'password'=>\bcrypt('12345678'),
            ],
            [
                'name'=>'customer',
                'email'=>'customer@gmail.com',
                'role'=>'customer',
                'status'=>'active',
                'password'=>\bcrypt('12345678'),
            ],

        ]);
    }
}
