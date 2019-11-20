<?php

use Illuminate\Database\Seeder;

use App\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('places')->delete();

      Place::create(array(
        'cover_photo'=>'img/cedart.jpg',
        'name'=>'Centro de Desarrollo Artesanal de Ilobasco',
      ));

      Place::create(array(
        'cover_photo'=>'img/tiestos.jpg',
        'name'=>'Tiestos Restaurant',
      ));

      Place::create(array(
        'cover_photo'=>'img/1.jpg',
        'name'=>'Parroquia San Miguel Arcángel de Ilobasco',
      ));

    }
}
