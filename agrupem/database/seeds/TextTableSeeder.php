<?php

use Illuminate\Database\Seeder;

class TextTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Text::class)->create(['name'=>'quiSom']);
        factory(App\Text::class)->create(['name'=>'queFem']);
        factory(App\Text::class)->create(['name'=>'novelty']);
    }
}