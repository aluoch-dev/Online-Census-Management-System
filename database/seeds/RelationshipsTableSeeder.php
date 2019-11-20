<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relationships')->insert(array(
            
            array(
                'relationship' => 'Father',
            ),

            array(
                'relationship' => 'Mother',
            ),

            array(
                'relationship' => 'child',
            ),

            array(
                'relationship' => 'other',
            ),

            array(
                'relationship' => 'spouse',
            ),

            ));
    }
}
