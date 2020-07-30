<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'author_id' => '1',
            'title' => 'Best Programming Language',
            'body' => 'What is the best programming language?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'author_id' => '2',
            'title' => 'Who am I?',
            'body' => 'Who am I to you?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
