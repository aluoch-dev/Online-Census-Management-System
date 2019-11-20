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
        $this->call([
            RolesTableSeeder::class, 
            StatesTableSeeder::class,
            CountiesTableSeeder::class,
            SubCountiesTableSeeder::class,
            AnimalsTableSeeder::class,
            GendersTableSeeder::class,
            AmenitiesTableSeeder::class,
            SchoolsTableSeeder::class,
            AssetsTableSeeder::class,
            DisabilitiesTableSeeder::class,
            EducationlevelsTableSeeder::class,
            RelationshipsTableSeeder::class,
        ]);
    }
}
