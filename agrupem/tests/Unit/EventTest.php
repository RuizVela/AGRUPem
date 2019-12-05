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
    public function test_get_only_nonExpired_events()
    {
        factory(Event::class,2)->create(['expired'=>true]);
        factory(Event::class,3)->create(['expired'=>false]);
        $allEvents = Event::all();
        $nonExpiredEvents=Event::getNonExpiredEvents();
        $this->assertCount(5,$allEvents);
        $this->assertCount(3,$nonExpiredEvents);
    }

    public function test_expire_test()
    {
        $event=factory(Event::class)->create();
        $this->assertFalse($event->expired);
        $event->expireEvent();
        $this->assertTrue($event->expired);
    }
    public function test_expire_if_date_is_past()
    {
        factory(Event::class,5)->create();
        Event::expirePastEvents();
        $events=Event::all();
        foreach ($events as $event){
        $this->assertTrue((boolean)$event->expired);}
    }
    public function test_get_all_past_nonExpired_events()
    {
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        factory(Event::class)->create(['expired'=>false,'date'=>$yesterday]);
        $events = Event::getPastEvents();
        $this->assertCount(1,$events);
        // $response=factory(Event::class)->create(['expired'=>false,'date'=>$yesterday]);
        // $this->assertContains($response,[$events]); TODO: no funciona porque el objeto no es exactamente igual.
    }
    public function test_dont_get_expired_events()
    {
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        factory(Event::class)->create(['expired'=>true,'date'=>$yesterday]);
        $events = Event::getPastEvents();
        $this->assertCount(0,$events);
    }
    public function test_dont_get_nonPast_events()
    {
        $today = date('Y-m-d');
        factory(Event::class)->create(['expired'=>false,'date'=>$today]);
        $events = Event::getPastEvents();
        $this->assertCount(0,$events);
    }
}