<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'code' => 'abc123',
            'type' => 'fixed',
            'value' => 2000
        ]);

        DB::table('discounts')->insert([
            'code' => 'abc456',
            'type' => 'percent',
            'percent' => 30
        ]);
    }
}
