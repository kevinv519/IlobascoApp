<?php

use Illuminate\Database\Seeder;

use App\EventTranslations;

class EventsTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('events_translations')->delete();

      EventTranslations::create(array(
        'id'=>'1',
        'lang' => 'es',
        'title'=>'Siglos XVI y XVII',
        'description'=>'El territorio de Ilobasco, que antiguamente estaba habitado por lencas, es conquistado por tribus pipiles. En 1550
        Ilobasco tenía alrededor de 1 100 habitantes y era uno de los pueblos de indios más importantes de la zona. Antiguamente, la población ocupaba el
        lugar conocido como Sitio viejo, 6 km al noroeste del sitio actual. Desde antes de 1609 el pueblo era administrado, en lo religioso, por los monjes
        del convento de Santo Domingo de San Salvador.',
      ));

      EventTranslations::create(array(
        'id'=>'1',
        'lang' => 'en',
        'title'=>'XVI and XVII Centuries',
        'description'=>'The territory of Ilobasco, which was formerly inhabited by Lenca, is conquered by Pipil tribes. In 1550
         Ilobasco had about 1 100 inhabitants and was one of the most important Indian towns in the area. Formerly, the population occupied the
         place known as Old Site, 6 km northwest of the current site. From before 1609 the town was administered, religiously, by the monks
         of the convent of Santo Domingo de San Salvador.',
      ));

        EventTranslations::create(array(
          'id'=>'2',
          'lang' => 'es',
          'title'=>'1740',
          'description'=>'En 1740 San Miguel de Ilobasco tenía 75 indios tributarios, o sea alrededor de 375
personas, según datos censales de la época. Hasta a mediados del siglo XVIII Ilobasco fue una población exclusivamente de indígenas, pero a causa de
varias familias de españoles o criollos que se asentaron en la zona, además de mulatos y ladinos, hubo necesidad de nombrar un alcalde pedáneo
propietario y otro suplente para que administrase justicia en lo civil y criminal, independientemente de los gobiernos indígenas.',
        ));

        EventTranslations::create(array(
          'id'=>'2',
          'lang' => 'en',
          'title'=>'1740',
          'description'=>'The territory of Ilobasco, which was formerly inhabited by Lenca, is conquered by Pipil tribes. In 1550
         Ilobasco had about 1 100 inhabitants and was one of the most important Indian towns in the area. Formerly, the population occupied the
         place known as Old Site, 6 km northwest of the current site. From before 1609 the town was administered, religiously, by the monks
         of the convent of Santo Domingo de San Salvador.',
        ));

        EventTranslations::create(array(
          'id'=>'3',
          'lang' => 'es',
          'title'=>'1785',
          'description'=>'Ilobasco se erigió nominalmente en parroquia y el a&ntilde;o siguiente quedó incluido como pueblo del partido de Cojutepeque, en la
intendencia de San Salvador.',
        ));

        EventTranslations::create(array(
          'id'=>'3',
          'lang' => 'en',
          'title'=>'1785',
          'description'=>'Ilobasco was nominally erected in parish and the following year was included as a town of the Cojutepeque party, in the
Intendance of San Salvador.',
        ));

        EventTranslations::create(array(
          'id'=>'4',
          'lang' => 'es',
          'title'=>'1812',
          'description'=>'El régimen de alcaldes pedáneos y jueces prevencionales acaba este a&ntilde;o, pues en virtud de la Constitución Española Ilobasco
constituyó su ayuntamiento, eligiendo un alcalde, cuatro regidores y un síndico.',
        ));

        EventTranslations::create(array(
          'id'=>'4',
          'lang' => 'en',
          'title'=>'1812',
          'description'=>'The regime of pre-commissioned mayors and judges ends this year, because under the Spanish Constitution Ilobasco
he constituted his city council, electing a mayor, four aldermen and a syndic.',
        ));

        EventTranslations::create(array(
          'id'=>'5',
          'lang' => 'es',
          'title'=>'Independencia',
          'description'=>'Cuando en enero de 1814 se produjo el segundo intento independentista en Salvador, los próceres enviaron a Ilobasco a un
se&ntide;or de apellido Mariona quien instigó a su vecindario diciéndoles que los chapetones se habían apoderado de San Salvador, que querían dictar
 nuevas y gravosas leyes tributarias, y que los padres Aguilar decían que ellos daban la cabeza por la Ley de Dios, antes de aceptar tantas
iniquidades.',
        ));

        EventTranslations::create(array(
          'id'=>'5',
          'lang' => 'en',
          'title'=>'Independence',
          'description'=>'When in January 1814 the second independence attempt was made in Salvador, the heroes sent Ilobasco to a
Mariona surnamed Mariona who instigated his neighborhood by telling them that the chapetones had taken over San Salvador, that they wanted to dictate
  new and burdensome tax laws, and that the Aguilar parents said that they gave their heads for the Law of God, before accepting so many
iniquities.',
        ));

        EventTranslations::create(array(
          'id'=>'6',
          'lang' => 'es',
          'title'=>'Época federal',
          'description'=>'Como pueblo del partido de Cojutepeque, conforme a la demarcación geográfica establecida en la primera
constitución del estado, del 12 de junio de 1824, Ilobasco quedó incorporado en el grande y extenso departamento de San Salvador.',
        ));

        EventTranslations::create(array(
          'id'=>'6',
          'lang' => 'en',
          'title'=>'Federal period',
          'description'=>'As a town of the Cojutepeque party, according to the geographical demarcation established in the first
state constitution, June 12, 1824, Ilobasco was incorporated into the large and extensive department of San Salvador.',
        ));

        EventTranslations::create(array(
          'id'=>'7',
          'lang' => 'es',
          'title'=>'1828',
          'description'=>'Se creó el partido de Ilobasco, constituido por los pueblos de Ilobasco, como cabecera, Santo Domingo, San Sebastián y aldeas en sus
 respectivas jurisdicciones. Los dos primeros pueblos pertenecían al partido de Cojutepeque, el último, al de San Vicente. El nuevo distrito quedó
incorporado en el departamento de San Vicente. Esta ley fue derogada en 1830 y en consecuencia, llobasco y Santo Domingo se reincoporaron al
departamento de San Salvador, quedando San Sebastián como pueblo del partido de San Vicente, en el departamento de ese mismo nombre.',
        ));

        EventTranslations::create(array(
          'id'=>'7',
          'lang' => 'en',
          'title'=>'1828',
          'description'=>'The party of Ilobasco was created, constituted by the towns of Ilobasco, like head, Santo Domingo, San Sebastián and villages in their
  respective jurisdictions. The first two towns belonged to the party of Cojutepeque, the last one, to that of San Vicente. The new district was
incorporated in the department of San Vicente. This law was repealed in 1830 and consequently, llobasco and Santo Domingo reincorporated to
department of San Salvador, leaving San Sebastián as a town of the San Vicente party, in the department of that same name.',
        ));

        EventTranslations::create(array(
          'id'=>'8',
          'lang' => 'es',
          'title'=>'1835',
          'description'=>'Por ley ejecutiva del 20 de junio de 1835, emitida por el general Nicolás Espinosa, se creó el distrito de Ilobasco, en el
departamento de Cuzcatlán (nombre que se dio al antiguo departamento de San Salvador, por ley del 22 de mayo de 1835).',
        ));

        EventTranslations::create(array(
          'id'=>'8',
          'lang' => 'en',
          'title'=>'1835',
          'description'=>'By executive law of June 20, 1835, issued by General Nicolás Espinosa, the district of Ilobasco was created, in the
department of Cuzcatlán (name given to the old department of San Salvador, by law of May 22, 1835).',
        ));


        EventTranslations::create(array(
          'id'=>'9',
          'lang' => 'es',
          'title'=>'1859',
          'description'=>'En diciembre de este año la villa de Ilobasco contaba con una población de 6455 habitantes.',
        ));

        EventTranslations::create(array(
          'id'=>'9',
          'lang' => 'en',
          'title'=>'1859',
          'description'=>'In December of this year the town of Ilobasco had a population of 6455 inhabitants.',
        ));


    }
}
