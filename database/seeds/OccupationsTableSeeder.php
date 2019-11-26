<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->insert(array(
            array(
                'occupation' => 'farmer',
            ),

            array(
                'occupation' => 'teacher',
            ),

            array(
                'occupation' => 'N/A',
            ),

        ));
    }
}
