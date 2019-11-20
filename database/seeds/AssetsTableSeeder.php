<?php

use Illuminate\Database\Seeder;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assets')->insert(array(
           
            array(
                'asset' => 'car',
            ),

            array(
                'asset' => 'bus',
            ),

            array(
                'asset' => 'TV',
            ),

            array(
                'asset' => 'laptop',
            ),

            array(
                'asset' => 'radio',
            ),

        ));
    }
}
