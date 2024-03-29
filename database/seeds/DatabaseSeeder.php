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
        // $this->call([UsersTableSeeder::class]);
        // $this->call([CovidProvincesTableSeeder::class]);
        // $this->call([ProductsTableSeeder::class]);
        // $this->call([PlantsTableSeeder::class]);
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
    }
}
