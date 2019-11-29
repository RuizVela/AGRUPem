<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Event;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function test_events_ordered_by_date()
    {
        $events=factory(Event::class,15)->create();
        $event=factory(Event::class)->create(['date'=>'0001-01-01']);
        $events=Event::sortByDate();
        $firstEvent = $events->first();
        $response = $firstEvent->date;
        $expected = $event->date;
        $this->assertEquals($response, $expected);
    }

    public function test_expire_test()
    {
        $event=factory(Event::class)->create();
        $this->assertFalse($event->expired);
        $event->expireEvent();
        $this->assertTrue($event->expired);
    }
}
