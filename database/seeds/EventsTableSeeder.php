<?php

use Illuminate\Database\Seeder;

use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();

        Event::create();
        Event::create();
        Event::create();
        Event::create();
        Event::create();
        Event::create();
        Event::create();
        Event::create();
        Event::create();
    }
}
