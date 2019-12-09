<?php

namespace Tests\Unit;

use App\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App;

class ResourceTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_catalan_title()
     {   
         App::setLocale('cat');
         $resource=factory(Resource::class)->create();
         $expected=$resource->title_catalan;
         $response = $resource->getLocalTitle();
         $this->assertEquals($expected,$response);
    }
    public function test_get_spanish_title()
    {   
        App::setLocale('es');
        $resource=factory(Resource::class)->create();
        $expected=$resource->title_spanish;
        $response = $resource->getLocalTitle();
        $this->assertEquals($expected,$response);
   }
   public function test_get_catalan_title_if_no_spanish_title()
   {
    App::setLocale('es');
    $resource=factory(Resource::class)->create(['title_spanish'=>NULL]);
    $expected=$resource->title_catalan;
    $response = $resource->getLocalTitle();
    $this->assertEquals($expected,$response);
   }
   public function test_get_catalan_title_if_non_specific_locale()
   {
    App::setLocale('en');
    $resource=factory(Resource::class)->create();
    $expected=$resource->title_catalan;
    $response = $resource->getLocalTitle();
    $this->assertEquals($expected,$response);
   }
}
