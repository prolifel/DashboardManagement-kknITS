<?php

use Illuminate\Database\Seeder;

class CovidProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covid_provinces')->insert([
            'province' => 'DKI Jakarta',
            'positive' => 43740,
            'recovered' => 25987,
            'death' => 1129,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('covid_provinces')->insert([
            'province' => 'Jawa Barat',
            'positive' => 30998,
            'recovered' => 24301,
            'death' => 2222,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('covid_provinces')->insert([
            'province' => 'Daerah Istimewa Yogyakarta',
            'positive' => 1248,
            'recovered' => 857,
            'death' => 34,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('covid_provinces')->insert([
            'province' => 'Jawa Tengah',
            'positive' => 9670,
            'recovered' => 5881,
            'death' => 263,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('covid_provinces')->insert([
            'province' => 'Jawa Timur',
            'positive' => 9670,
            'recovered' => 5881,
            'death' => 263,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
