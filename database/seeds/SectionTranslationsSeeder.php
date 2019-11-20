<?php

use Illuminate\Database\Seeder;

use App\SectionTranslations;

class SectionTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_translations')->delete();

        SectionTranslations::create(array(
            'id'=>'1',
            'lang'=>'en',
            'body'=>'<h2>Welcome to Ilobasco</h2>
                       <p>Ilobasco, located in the Department of Cabañas, in the paracentral region of El Salvador, located on the top of a hill 750 meters above sea level. It is limited to the north, by the municipalities of Sensuntepeque and Jutiapa; to the west by the municipality of San Isidro; to the south by the municipalities of Rosario, Monte San Juan, San Rafael Cedros, department of Cuscatlán and San Sebastián, department of San Vicente; to the west by the municipalities of Jutiapa and Tejutepeque, department of Cabañas.</p>
                       <p>It has a population of approximately 61,510 people, which is dedicated to livestock, corn agriculture, commerce and pottery, the characteristic activity for which Ilobasco is best known.</p>
                       <p><img src="/photos/shares/4.jpg" alt="" width="795" /></p>',
        ));

        SectionTranslations::create(array(
            'id'=>'1',
            'lang'=>'es',
            'body'=>'<h2>Bienvenidos al municipio de Ilobasco</h2>
                    <p>Ilobasco, se encuentra ubicada en el Departamento de Cabañas, en la región paracentral de El Salvador, situado en la cima de una colina a 750 metros sobre el nivel del mar. Está limitado al norte, por los municipios de Sensuntepeque y Jutiapa; al oeste por el municipio de San Isidro; al sur por los municipios del Rosario, Monte San Juan, San Rafael Cedros, departamento de Cuscatlán y San Sebastián, departamento de San Vicente; al oeste por los municipios de Jutiapa y Tejutepeque, departamento de Cabañas.</p>
                    <p>Posee una población aproximadamente de 61,510 personas las cuales se dedica a la ganadería, la agricultura del maíz, el comercio y a la alfarería la actividad característica por la que Ilobasco es más conocido.</p>
                    <p><img src="/photos/shares/4.jpg" alt="" width="795" /></p>',
        ));


    }
}
