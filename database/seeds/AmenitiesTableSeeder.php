<?php

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->insert(array(
           
            array(
                'amenity' => 'gas',
            ),

            array(
                'amenity' => 'wood',
            ),

            array(
                'amenity' => 'bins',
            ),

            array(
                'amenity' => 'compound',
            ),

            array(
                'amenity' => 'city council',
            ),

        ));
    }
}
