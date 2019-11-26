<?php

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_fields')->insert(array(
            
            array(
                'study_field' => 'Physical Sciences',
            ),

            array(
                'study_field' => 'Biological Sciences',
            ),

            array(
                'study_field' => 'Information Sciences',
            ),

            array(
                'study_field' => 'Human Sciences',
            ),

            array(
                'study_field' => 'N/A',
            ),

        ));
    }
}
