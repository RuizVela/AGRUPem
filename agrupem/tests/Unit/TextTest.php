<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Text;
use App;

class TextTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_queFem_text()
    {
        $queFem=factory(Text::class)->create(['name'=>'queFem']);
        $response = Text::getQueFem();

        $this->assertEquals($queFem->name, $response->name);
    }
    public function test_get_quiSom_text()
    {
        $quiSom=factory(Text::class)->create(['name'=>'quiSom']);
        $response = Text::getQuiSom();

        $this->assertEquals($quiSom->name,$response->name);
    }
    public function test_get_novelty()
    {
        $novelty=factory(Text::class)->create(['name'=>'novelty']);
        $response = Text::getNovelty();
        $this->assertEquals($novelty->name,$response->name);
    }
}
