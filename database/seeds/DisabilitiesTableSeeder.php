<?php

use Illuminate\Database\Seeder;

class DisabilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disabilities')->insert(array(
           
            array(
                'disability' => 'mobility',
            ),

            array(
                'disability' => 'visual',
            ),

            array(
                'disability' => 'hearing',
            ),

        ));
    }
}
