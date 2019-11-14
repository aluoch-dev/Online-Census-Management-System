<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert(array(
            array(
            'name' => 'user',
            ),
            array(
            'name' => 'admin',
            ),
            array(
            'name' => 'enumerator'
            ),
        ));


    }
}
