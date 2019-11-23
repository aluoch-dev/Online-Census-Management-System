<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(

            array(
                'role_id' => 1,
                'national_id' => '22334455',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345678')
            ),

            array(
                'role_id' => 2,
                'national_id' => '3344556677',
                'email' => 'admin@mail.com',
                'password' => bcrypt('12345678')
            ),

            array(
                'role_id' => 3,
                'national_id' => '8844556677',
                'email' => 'enumerator@mail.com',
                'password' => bcrypt('12345678')
            ),

        ));
    }
}
