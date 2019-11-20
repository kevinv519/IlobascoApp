<?php

use Illuminate\Database\Seeder;

use App\Sections;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->delete();

      Sections::create(array(
        'section_index'=>'1',
        'is_hidden'=>'0',
      ));

      Sections::create(array(
        'section_index'=>'2',
        'is_hidden'=>'0',
      ));

    }
}
