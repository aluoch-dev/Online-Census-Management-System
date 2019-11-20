<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert(array(
           
            array(
                'school_name' => 'Kenya',
                'county_id' => '1',
                'subcounty_id' => '1'
            ),

            array(
                'school_name' => 'Ziki',
                'county_id' => '2',
                'subcounty_id' => '1'
            ),

            array(
                'school_name' => 'Suba',
                'county_id' => '3',
                'subcounty_id' => '1'
            ),

        ));
    }
}
