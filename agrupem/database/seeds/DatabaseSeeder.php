<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(PostTableSeeder::class);
        $this->call(ResourceTableSeeder::class);
        $this->call(NoveltySeeder::class);
         $this->call(EventTableSeeder::class);
    }
}
