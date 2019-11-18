<?php

use Illuminate\Database\Seeder;

class SubCountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcounties')->insert(array(
           
            array(
                'subcounty_name' => 'Changamwe',
                'county_id' => '1',
            ),

            array(
                'subcounty_name' => 'Jomvu',
                'county_id' => '1',
            ),

            array(
                'subcounty_name' => 'Kisauni',
                'county_id' => '1',
            ),

            array(
                'subcounty_name' => 'Likoni',
                'county_id' => '1',
            ),

            array(
                'subcounty_name' => 'Mvita',
                'county_id' => '1',
            ),

            array(
                'subcounty_name' => 'Nyali',
                'county_id' => '2',
            ),

            array(
                'subcounty_name' => 'Kinango',
                'county_id' => '2',
            ),

            array(
                'subcounty_name' => 'Kwale',
                'county_id' => '2',
            ),

            array(
                'subcounty_name' => 'Lunga Lunga',
                'county_id' => '2',
            ),

            array(
                'subcounty_name' => 'Msambweni',
                'county_id' => '2',
            ),

            array(
                'subcounty_name' => 'Bahari',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Ganze',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Kaloleni',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Kilifi South',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Magarini',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Malindi',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Rabai',
                'county_id' => '3',
            ),

            array(
                'subcounty_name' => 'Bura(Tana North)',
                'county_id' => '4',
            ),

            array(
                'subcounty_name' => 'Tana Delta',
                'county_id' => '4',
            ),

            array(
                'subcounty_name' => 'Tana River',
                'county_id' => '4',
            ),

            array(
                'subcounty_name' => 'Tana River',
                'county_id' => '4',
            ),

            array(
                'subcounty_name' => 'Lamu East',
                'county_id' => '5',
            ),

            array(
                'subcounty_name' => 'Lamu West',
                'county_id' => '5',
            ),

        ));
    }
}
