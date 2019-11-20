<?php

use Illuminate\Database\Seeder;

use App\PlaceTranslations;

class PlacesTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('places_translations')->delete();

      PlaceTranslations::create(array(
        'id'=>'1',
        'lang'=>'en',
        'description'=>'One of the main attractions of the CEDART is the experience that the tourist can experience with
the craftsmen who are creating the workshops every day.\nThis center for training and development of the work of entrepreneur craftsmen who seek to
improve the production of their work.\nLocated on Av. Carlos Bonilla, a few meters north of the Plaza al Artesano, it has all the necessary tools
for teaching and making all kinds of clay products.',
      ));

      PlaceTranslations::create(array(
        'id'=>'1',
        'lang'=>'es',
        'description'=>'Uno de los principales atractivos del CEDART es la experiencia que puede vivir el turista junto a los artesanos que todos los días están
creando en los talleres.\r\nEste centro de capacitación y desarrollo del trabajo de artesanos emprendedores que buscan mejorar la producción de su
labor.\r\nUbicada en la Av. Carlos Bonilla a escasos metros al norte de la Plaza al Artesano posee todos los implementos necesarios para la
enseñanza y elaboración de todo tipo de productos en barro.',
      ));

      PlaceTranslations::create(array(
        'id'=>'2',
        'lang'=>'en',
        'description'=>'Located in the center of the tourist / craft area of Ilobasco, Tiestos is a restaurant that highlights the work of the ilobasquenses
artisans and their work in clay.\nA place that evokes the life of the people, in harmony with nature and a wide gastronomic offer, offers tourists
 the experience of mud and exquisite dishes.',
      ));

      PlaceTranslations::create(array(
        'id'=>'2',
        'lang'=>'es',
        'description'=>'Ubicado en el pleno centro de la zona turística/artesanal de Ilobasco, Tiestos,
es un restaurante que resalta el trabajo de los artesanos ilobasquenses y su trabajo en barro.\r\nUn local que evoca a la vida de pueblo, en armonía
con la naturaleza y una amplia oferta gastronómica ofrece a los turistas la experiencia del barro y exquisitos platillos.',
      ));

      PlaceTranslations::create(array(
        'id'=>'3',
        'lang'=>'es',
        'description'=>'La iglesia San Miguel fue construida en el siglo XIX. Está construida a base de adobes. Cielo falso de tablilla, estructura de techo de madera, cubierta de teja, columnas simples, dobles y triples de madera forradas en tablillas de madera.',
      ));

      PlaceTranslations::create(array(
        'id'=>'3',
        'lang'=>'en',
        'description'=>'Located in the center of the tourist/craft area of Ilobasco, Tiestos, is a restaurant that highlights the work of the ilobasquenses artisans and their work in clay. A place that evokes the life of the country side, in harmony with nature and a wide gastronomic variety, offers tourists the experience of the clay and exquisite dishes.',
      ));

    }
}
