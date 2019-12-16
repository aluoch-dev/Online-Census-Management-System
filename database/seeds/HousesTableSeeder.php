<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('house_structures')->insert(array(
            array(
                'structure' => 'concrete',
            ),

            array(
                'structure' => 'mud',
            ),

            array(
                'structure' => 'homeless',
            ),

        ));
    }
}
