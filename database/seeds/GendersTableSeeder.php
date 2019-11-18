<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert(array(
            array(
                'gender' => 'female',
            ),

            array(
                'gender' => 'male',
            ),

        ));
    }
}
