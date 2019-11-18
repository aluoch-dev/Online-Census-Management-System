<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert(array(
            
            array(
                'animal' => 'cow'
            ),

            array(
                'animal' => 'goat'
            ),

            array(
                'animal' => 'sheep'
            ),

            array(
                'animal' => 'donkey'
            ),

            array(
                'animal' => 'poultry'
            ),

            ));
    }
}
