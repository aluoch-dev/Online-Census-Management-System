<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
            array(
            'role_name' => 'user',
            
            ),
            array(
            'role_name' => 'admin',
            ),
            array(
            'role_name' => 'enumerator'
            ),
        ));


    }
}
