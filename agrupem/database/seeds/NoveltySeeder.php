<?php

use Illuminate\Database\Seeder;

class NoveltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Novelty::class, 10)->create();
    }
}
