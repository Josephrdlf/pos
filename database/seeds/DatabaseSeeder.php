<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_categories')->insert([
            'name' => 'Makanan',
        ]);

        DB::table('products_categories')->insert([
            'name' => 'Minuman',
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        
        DB::table('roles')->insert([
            'name' => 'Owner',
        ]);

        DB::table('roles')->insert([
            'name' => 'Member',
        ]);

        DB::table('roles')->insert([
            'name' => 'Cashier',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin POS',
            'email' => 'admin@pos.com',
            'password' => Hash::make('adminpos'),
            'api_token' => Str::random(60),
            'role_id' => '1',
        ]);
        
    }
}
