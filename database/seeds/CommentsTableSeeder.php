<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '3',
            'post_id' => '1',
            'description' => 'Of course it is Python.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '1',
            'description' => 'C++ is the best programming language.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
