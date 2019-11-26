<?php

use Illuminate\Database\Seeder;

class EducationlevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_levels')->insert(array(
           
            array(
                'education_level' => 'Primary Education',
            ),

            array(
                'education_level' => 'Secondary Education',
            ),

            array(
                'education_level' => 'University',
            ),

            array(
                'education_level' => 'N/A',
            ),

        ));
    }
}
