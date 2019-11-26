<?php

use Illuminate\Database\Seeder;

class EmploymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employment_statuses')->insert(array(
            
            array(
                'employment_status' => 'Employed',
            ),

            array(
                'employment_status' => 'Student',
            ),

            array(
                'employment_status' => 'Not Employed',
            ),

        ));
    }
}
