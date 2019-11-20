<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventsTranslationsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewsTranslationsTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(PlacesTranslationsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SectionTranslationsSeeder::class);
    }
}
