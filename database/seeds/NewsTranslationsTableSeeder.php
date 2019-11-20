<?php

use Illuminate\Database\Seeder;

use App\NewsTranslation;

class NewsTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('news_translations')->delete();

      NewsTranslation::create(array(
        'id' => '1',
        'title'=>'Unión de Instituciones para el bienestar de los habitantes',
        'lang'=>'es',
        'description'=>'En el Cantón Llanitos, Caserío Quesera Abajo el 22 de mayo del presente año se realizó un Torneo de Fúbol relámpago, organizado por la Alcaldia Municipal de Ilobasco, Policía Comunitaria y la ADESCO de la comunidad. Eliseo Castellanos, Alcalde Municipal se presentó a la actividad acompañado de Carlos Reyes, Diputado por Cabañas, Miembros del Concejo Municipal, Representantes de la Policía Comunitaria y líderes de la zona. En la actividad también los niños disfrutaron de pinta caritas, payasos, piñatas, música en vivo y muchas sorpresas más. Cabe recalcar que este tipo de actividades que se realizan cada fin de semana en las distintas comunidades de todo el municipio son apoyadas por la alcaldía entregando premios y apoyo a la organización.

Los premios entregados por la municipalidad fueron balones y dinero en efectivo, también el Ing. Carlos Reyes entregó Uniformes deportivos y trofeos por parte de la Policía Nacional Civil de El Salvador. ',
      ));

      NewsTranslation::create(array(
        'id' => '1',
        'title'=>'Union of Institutions for the welfare of the inhabitants',
        'lang'=>'en',
        'description'=>'In the Canton Llanitos, Caserío Quesera Abajo on May 22 of this year, a Lightning Football Tournament was organized, organized by the Municipal City Hall of Ilobasco, Community Police and the ADESCO of the community. Eliseo Castellanos, Mayor of the City presented himself to the activity accompanied by Carlos Reyes, Deputy for Cabañas, Members of the Municipal Council, Representatives of the Community Police and leaders of the area. In the activity the children also enjoyed face painting, clowns, piñatas, live music and many more surprises. It should be noted that this type of activities that take place every weekend in the different communities throughout the municipality are supported by the mayor s office, providing prizes and support to the organization. The awards given by the municipality were balls and cash, also Mr. Carlos Reyes delivered sports uniforms and trophies by the National Civil Police of El Salvador.',
      ));

      NewsTranslation::create(array(
        'id' => '2',
        'title'=>'Un torneo que inició en Diciembre de 2016 llega a su emocionante final.',
        'lang'=>'es',
        'description'=>'Este fin de semana finalizó el Torneo de Fútbol Libre, que inició en Diciembre de 2016 en las canchas ubicadas en la Colonia El Milán de Ilobasco. Eliseo Castellanos, Alcalde presente en la premiación de los campeones de las categorías primera y segunda, felicitó a los participantes y les reiteró el apoyo que tienen de parte de la municipalidad para actividades como esta.

En una jornada de muchos emocionantes partidos de fútbol, donde los seguidores de los distintos equipos en disputa por los primeros lugares se llenaron de adrenalina apoyando a los equipos de su preferencia y convivieron en forma armoniosa y segura. Además de Trofeos, Uniformes y Balones entregados a los participantes desde el torneo relámpago que inició la actividad deportiva los 4 primeros lugares de cada categoría recibieron premios en efectivo de casi “Mil Dólares” en total.',
      ));

      NewsTranslation::create(array(
        'id' => '2',
        'title'=>'A tournament that began in December 2016 reaches its exciting finale.',
        'lang'=>'en',
        'description'=>'This weekend ended the Free Football Tournament, which began in December 2016 on the courts located in the Colonia El Milán in Ilobasco. Eliseo Castellanos, Mayor present at the awards of the champions of the first and second categories, congratulated the participants and reiterated the support they have from the municipality for activities like this.

In a day of many exciting football matches, where the followers of the different teams in dispute for the first places were filled with adrenaline, supporting the teams of their preference and coexisting harmoniously and safely. In addition to Trophies, Uniforms and Balls delivered to the participants since the lightning tournament that started the sport activity, the first 4 places in each category received cash prizes of almost "One Thousand Dollars" in total.',
      ));

      NewsTranslation::create(array(
        'id' => '3',
        'title'=>'Eliseo Castellanos en la entrega de insumos y herramientas a emprendedores',
        'lang'=>'es',
        'description'=>'Eliseo Castellanos, Alcalde de Ilobasco junto a Gladis de Serpas Presidenta de FISDL El Salvador hacen entrega de insumos a 44 emprendedores de sectores priorizados por el Comité de Prevención.
        Este jueves 22 de junio se realizó el acto de entrega formal de insumos y herramientas a los 44 participantes del Programa Emprendimiento Solidario, con la presencia de autoridades municipales y el Diputado por Cabañas Ing. Carlos Reyes.

17 iniciativas que nacieron de sociedades que personas emprendedoras en busca de un mejor futuro con el apoyo de la Alcaldía Municipal de Ilobasco, recibieron las herramientas necesarias para iniciar o fortalecer sus negocios.
De las 44 personas 35 son mujeres y 9 hombres de diversas zonas de Ilobasco como el Barrio San Miguel, Colonia Miranda 2, Colonia Elen 1, Caserío Rancho Quemado, Caserío Quesera Abajo, Caserío Las Flores, Colonia El Recuerdo, Col. La Palma, Cantón Aguazarca, entre otros.
El programa Emprendimiento Solidario tendrá una duración de 2 años, dentro de los cuáles está el compromiso de monitoreo y seguimiento por parte de la municipalidad de Ilobasco.

Este es el segundo programa que se realiza en este periodo de gobierno local de Eliseo Castellanos, pues gracias a la buena gestión sigue recibiendo proyectos que benefician a la ciudadanía local.',
      ));

      NewsTranslation::create(array(
        'id' => '3',
        'title'=>'Eliseo Castellanos in the delivery of supplies and tools to entrepreneurs',
        'lang'=>'en',
        'description'=>'Eliseo Castellanos, Mayor of Ilobasco with Gladis de Serpas President of FISDL El Salvador, provides inputs to 44 entrepreneurs from sectors prioritized by the Prevention Committee.
        On Thursday, June 22, the act of formal delivery of supplies and tools to the 44 participants of the Solidarity Entrepreneurship Program was held, with the presence of municipal authorities and the Deputy for Cabins Eng. Carlos Reyes.

17 initiatives that were born from companies that entrepreneurs in search of a better future with the support of the City Hall of Ilobasco, received the necessary tools to start or strengthen their businesses.
Of the 44 people, 35 are women and 9 men from different areas of Ilobasco, such as Barrio San Miguel, Colonia Miranda 2, Colonia Elen 1, Caserío Rancho Quemado, Caserío Quesera Abajo, Caserío Las Flores, Colonia El Recuerdo, Col. La Palma, Canton Aguazarca, among others.
The Solidarity Entrepreneurship Program will last for 2 years, within which is the commitment of monitoring and monitoring by the municipality of Ilobasco.

This is the second program that is carried out in this period of local government of Eliseo Castellanos, because thanks to good management he continues to receive projects that benefit local citizens.
Google Traductor para empresas:Translator ToolkitTraductor de sitios web
',
      ));

      NewsTranslation::create(array(
        'id' => '4',
        'title'=>'Destacada participación de la escuela de taekwondo de Ilobasco',
        'lang'=>'es',
        'description'=>'La Escuela de TaekWon-Do de la Alcaldía Municipal de Ilobasco participó  en la Copa "General Choi Hong Hi" Realizada por la Unión Salvadoreña de Taekwon-Do I.T.F. en Indes El Salvador. Con la participación de más de 20 escuelas, IDAMI obtuvo 7 medallas de oro, 4 de plata, 2 de bronce y 4 medallas por el primer lugar en exhibición.

17 Medallas obtenidas, subcampeones a nivel de escuelas y la clasificación al Torneo Centroamericano que se realizará en Puerto Cortés Hondura el próximo 19 de agosto.',
      ));

      NewsTranslation::create(array(
        'id' => '4',
        'title'=>'Outstanding participation of the Ilobasco taekwondo school',
        'lang'=>'en',
        'description'=>'
The School of TaekWon-Do of the City Hall of Ilobasco participated in the "General Choi Hong Hi" Cup held by the Salvadoran Union of Taekwon-Do I.T.F. in Indes El Salvador. With the participation of more than 20 schools, IDAMI won 7 gold medals, 4 silver medals, 2 bronze medals and 4 medals for the first place on display.

17 Medals obtained, runners-up at school level and the Central American Tournament qualification to be held in Puerto Cortés Hondura next August 19.',
      ));

      NewsTranslation::create(array(
        'id' => '5',
        'title'=>'Miles de personas afectadas acuden al alcalde por una solución',
        'lang'=>'es',
        'description'=>'A finales del mes de junio la calle que conduce del Caserío Centro, Cantón Huertas hacia el Cantón Calera se había desprendido y formado una cárcava de unos 3 metros diámetro debido a las constantes lluvias en la zona. Eliseo Castellanos, Alcalde Municipal ante la petición de los habitantes de la zona, decidió reparar el daño a la vía de acceso que muchas personas utilizan diariamente aunque la calle debe ser reparada y recibir mantenimiento del Ministerio de Obras Públicas. Los habitantes de las comunidades cercanas se mostraron satisfechos por el trabajo y agradecidos con el edil pues ya pueden realizar todas sus actividades con normalidad.',
      ));

      NewsTranslation::create(array(
        'id' => '5',
        'title'=>'Thousands of affected people go to the mayor for a solution',
        'lang'=>'en',
        'description'=>'At the end of June, the street that leads from Caserío Centro, Cantón Huertas to Cantón Calera had fallen off and formed a gully about 3 meters in diameter due to the constant rains in the area. Eliseo Castellanos, Municipal Mayor at the request of the inhabitants of the area, decided to repair the damage to the access road that many people use daily although the street must be repaired and receive maintenance from the Ministry of Public Works. The inhabitants of the nearby communities were satisfied with the work and grateful to the mayor because they can now perform all their activities normally.',
      ));

      NewsTranslation::create(array(
        'id' => '6',
        'title'=>'Campaña de salud visual con el apoyo de la alcaldía de Ilobasco',
        'lang'=>'es',
        'description'=>'Fudem El Salvador organizará una MegaCampaña de Salud Visual este jueves 24 de Agosto en las instalaciones de la Alcaldía Municipal de Ilobasco.

Eliseo Castellanos, Alcalde te invita a aprovechar la oportunidad que junto a FUDEM tienes de realizarte exámenes de la vista TOTALMENTE GRATIS desde las 8:00 a.m. hasta las 3:00 p.m.
Recuerda que la consulta es totalmente gratis, y de ser necesario también las gotas son gratis.

Agradecimientos especiales a FUDEM EL SALVADOR por el apoyo a la salud de los ilobasquenses.',
      ));

      NewsTranslation::create(array(
        'id' => '6',
        'title'=>'Visual health campaign with the support of the mayor of Ilobasco',
        'lang'=>'en',
        'description'=>'Fudem El Salvador will organize a MegaCampaña of Visual Health this Thursday, August 24 at the facilities of the City Hall of Ilobasco.

Eliseo Castellanos, Mayor invites you to take advantage of the opportunity that FUDEM has with you to get your eye exams TOTALLY FREE from 8:00 a.m. until 3:00 p.m.
Remember that the consultation is totally free, and if necessary, the drops are free.

Special thanks to FUDEM EL SALVADOR for supporting the health of the Ilobasquenses.',
      ));

      NewsTranslation::create(array(
        'id' => '7',
        'title'=>'Ilobasco coronó a su reina 2017',
        'lang'=>'es',
        'description'=>'El pasado sábado nueve de septiembre de este año, se realizó el magno evento de elección y coronación de la reina de las Fiestas Patronales de Ilobasco, en honor a San Miguel Arcángel, organizado por el Comité de Festejos y la Municipalidad.

Siendo para el Alcalde Municipal, Eliseo Castellanos, su décima octava fiesta patronal como edil en nuestro querido municipio. Cabe destacar que es la primera vez que el grandioso evento se desarrolló en el Parque Central, Dr. Enrique Hoyos; cuando por años se organizó en el ex cine Palace. La competencia se dio entre cinco hermosas señoritas, cada una representante de los diferentes barrios y comités de la ciudad de Ilobasco, en la cual todas debían mostrar sus cualidades y habilidades, para poder  lucirse como nunca, quedando al final coronada la señorita Harlem Saravia, representante del Barrio San Miguel.

En el lugar se hicieron presente, el Sr. Alcalde Municipal y su esposa, Ana Vilma de Castellanos, miembros del Concejo Municipal, diputados y alcaldes de diferentes municipalidades, la ex Ministra de Educación, Darlyn Meza, el Diputado de nuestro querido departamento Cabañas, Ing. Carlos Reyes, candidatas de las fiestas patronales de Sensuntepeque, la actual reina de las ADESCOS, Flor Amaya, nuestra  querida reina saliente, Jackeline López y por último pero no menos importante, las miles de personas que presenciaron este gran evento.',
      ));

      NewsTranslation::create(array(
        'id' => '7',
        'title'=>'Ilobasco crowned his queen 2017',
        'lang'=>'en',
        'description'=>'Last Saturday, September 9 of this year, the great event of election and coronation of the queen of the Patron Saint Festivities of Ilobasco was held, in honor of San Miguel Arcángel, organized by the Celebration Committee and the Municipality.

Being for the Municipal Mayor, Eliseo Castellanos, his eighteenth patronal feast as mayor in our beloved municipality. It is worth mentioning that it is the first time that the great event was held at Parque Central, Dr. Enrique Hoyos; when for years it was organized in the former cinema Palace. The competition took place between five beautiful young ladies, each representative of the different neighborhoods and committees of the city of Ilobasco, in which all had to show their qualities and skills, to be able to show off like never before, with Miss Harlem Saravia finally crowned, representative of the San Miguel neighborhood.

The Mayor and his wife, Ana Vilma de Castellanos, members of the Municipal Council, deputies and mayors of different municipalities, the former Minister of Education, Darlyn Meza, the Deputy of our beloved department of Cabañas, were present at the place. Ing. Carlos Reyes, candidates for the patron saint festivities of Sensuntepeque, the current queen of the ADESCOS, Flor Amaya, our beloved outgoing queen, Jackeline López and last but not least, the thousands of people who witnessed this great event.',
      ));

      NewsTranslation::create(array(
        'id' => '8',
        'title'=>'An unforgettable party',
        'lang'=>'en',
        'description'=>'The Patron Festivals 2017 in Ilobasco will be unforgettable for locals and visitors.

A great event of Election and Coronation, Massive Carnival Dance, The first Cattle Fair was held in our municipality and it seems that it will become a great tradition in the coming years and many more events that our visitors from abroad, Salvadorans and our loved ones enjoyed. ilobasquenses.
We thank all the citizens who gladly participated in the activities that the Central Celebration Committee chaired by Mr. Mayor, Eliseo Castellanos prepared for all of you and we hope you have been pleased.',
      ));

      NewsTranslation::create(array(
        'id' => '8',
        'title'=>'Unas fiestas inolvidables',
        'lang'=>'es',
        'description'=>'

Las Fiestas Patronales 2017 en Ilobasco serán inolvidables para locales y visitantes.

Un gran evento de Elección y Coronación, Masivo Carnaval Bailable, La primera Feria Ganadera se realizó en nuestro municipio y parece que se convertirá en una gran tradición en los próximos años y muchos eventos más que disfrutaron nuestros visitantes desde el extranjero, salvadoreños y nuestros queridos ilobasquenses.
Agradecemos a todos los ciudadanos que participaron gustosamente de las actividades que el Comité Central de Festejos presidido por el Sr. Alcalde, Eliseo Castellanos preparó para todos ustedes y esperamos hayan sido de su agrado.',
      ));

      NewsTranslation::create(array(
        'id' => '9',
        'title'=>'Fútbol para la prevención',
        'lang'=>'es',
        'description'=>'

"Gracias a ustedes por organizar estas actividades que crean unión en las comunidades y previenen la violencia" Eliseo Castellanos, Alcalde.

Alrededor de 200 jóvenes participaron en un torneo relámpago de fútbol organizado por C.D. Cadiz y miembros de la comunidad católica del Cantón Llanitos en la Cancha Amatillo.

Eliseo Castellanos, Alcalde se hizo presente para apoyar a los organizadores, entregando los premios que consistían en uniformes completos, balones de fútbol y dinero en efectivo.

Seguimos gobernando de la mano con las comunidades, Alcaldía Municipal de Ilobasco.
',
      ));

      NewsTranslation::create(array(
        'id' => '9',
        'title'=>'Soccer for Prevention',
        'lang'=>'en',
        'description'=>'"Thank you for organizing these activities that create unity in the communities and prevent violence" Eliseo Castellanos, Mayor.

Around 200 young people participated in a lightning football tournament organized by C.D. Cadiz and members of the Catholic community of Cantón Llanitos in the Amatillo Court.

Eliseo Castellanos, Mayor was present to support the organizers, handing out prizes consisting of complete uniforms, soccer balls and cash.

We continue to govern hand in hand with the communities, City Hall of Ilobasco.
',
      ));

      NewsTranslation::create(array(
        'id' => '10',
        'title'=>'Mantenimiento continuo de vías',
        'lang'=>'es',
        'description'=>'

Empleados municipales supervisando la reparación de Calle que conduce al Cantón Llanitos.

Eliseo Castellanos, Alcalde Municipal está siempre pendiente de los daños que sufren las calles de la ciudad para asegurar el bienestar de los habitantes ilobasquenses.

La municipalidad continúa realizando esfuerzos por reparar las vías que conducen a las diferentes comunidades de nuestra ciudad.
',
      ));

      NewsTranslation::create(array(
        'id' => '10',
        'title'=>'Continuous track maintenance',
        'lang'=>'en',
        'description'=>'Municipal employees supervising the repair of Calle that leads to Canton Llanitos.

Eliseo Castellanos, Municipal Mayor is always aware of the damage suffered by the streets of the city to ensure the well-being of the inhabitants of Ilobasque.

The municipality continues making efforts to repair the roads that lead to the different communities of our city.',
      ));

      NewsTranslation::create(array(
        'id' => '11',
        'title'=>'Es para estos jóvenes que trabajamos a diario',
        'lang'=>'es',
        'description'=>'La Alcaldía Municipal de Ilobasco contribuye a la superación de  jóvenes y señoritas que residen todo el municipio en edades de 18 a 29 años, con la implementación junto a USAID El Salvador  del Centro Municipal de Formación  Vocacional, donde se imparten Cursos Vocacionales desarrollados por el Instituto Salvadoreño de Formación Profesional (Insaforp), con el objetivo de contribuir en el desarrollo de habilidades que aseguren mejores oportunidades laborales.

Los cursos que se imparten son: Cocina Internacional, Instalaciones Eléctricas Residenciales, Reparación y Actualización de Celulares y (Academia Microsoft, que es permanente)

Los cursos generalmente duran 3 semanas y se desarrollan de martes a sábado en jornadas que inician a las 8:00 a.m. y finalizan a las 4:00 p.m.

Más de mil jóvenes han sido formados en este centro que también cuenta con la Academia Microsoft que es una opción a nivel de la zona de Cabañas en ofrecer servicios de certificaciones internacionales en los programas del paquete de Microsoft (Word, Excel, Power Point), también en lenguaje de programación como HTML5, entre otros, aumentando los niveles competitivos y productivos de sus habitantes.

Hasta la fecha casi 2 mil jóvenes han aprovechado la oportunidad de formación que es totalmente gratuita, desde la inscripción hasta el desarrollo de los cursos, pues todas las herramientas en los cursos de Instalaciones Eléctricas Residenciales y Reparación y Actualización de Celulares están a disposición de los jóvenes, y en el caso  de los cursos de Cocina Internacional también, y se les provee hasta de los insumos alimenticios para la preparación de sus prácticas.

En algunos casos se ha subsidiado el costo de los pasajes y alimentación cuando los jóvenes son  de escasos recursos y viven fuera de la zona urbana.

Este Centro de Formación Vocacional y los 7 Centros de Alcance en las comunidades iniciaron con el Proyecto de Prevención de la Violencia que junto a USAID la municipalidad de Ilobasco pusieron en marcha desde 2014 y desde hace ya un año Eliseo Castellanos, Alcalde Municipal decidió darle seguimiento y costear totalmente el proyecto para que niños y jóvenes de Ilobasco continúen aprovechando las oportunidades de educación, formación y entretenimiento.',
      ));

      NewsTranslation::create(array(
        'id' => '11',
        'title'=>'It is for these young people that we work daily',
        'lang'=>'en',
        'description'=>'The City Hall of Ilobasco contributes to the improvement of youths and young women residing throughout the municipality aged 18 to 29, with the implementation of the Vocational Training Municipal Center together with USAID El Salvador, where Vocational Courses developed by the Institute are taught Salvadoran Vocational Training (Insaforp), with the aim of contributing to the development of skills that ensure better job opportunities.

The courses that are taught are: International Cuisine, Residential Electrical Installations, Repair and Updating of Cell Phones and (Microsoft Academy, which is permanent)

The courses generally last 3 weeks and take place from Tuesday to Saturday in days that start at 8:00 a.m. and they end at 4:00 p.m.

More than a thousand young people have been trained in this center that also has the Microsoft Academy, which is an option at the level of the Cabañas area to offer international certification services in the Microsoft package programs (Word, Excel, Power Point), also in programming language such as HTML5, among others, increasing the competitive and productive levels of its inhabitants.

To date almost 2,000 young people have taken advantage of the training opportunity, which is completely free, from registration to the development of the courses, since all the tools in the courses of Residential Electrical Installations and Repair and Updating of Cell Phones are available to the students. young people, and in the case of International Cooking courses as well, and they are even provided with food supplies for the preparation of their practices.

In some cases, the cost of tickets and food has been subsidized when young people are poor and live outside the urban area.

This Vocational Training Center and the 7 Outreach Centers in the communities started with the Violence Prevention Project that, together with USAID, the municipality of Ilobasco, started up in 2014 and, a year ago, Eliseo Castellanos, the Municipal Mayor decided to follow up and fully fund the project so that children and young people of Ilobasco continue to take advantage of education, training and entertainment opportunities.',
      ));

      NewsTranslation::create(array(
        'id' => '12',
        'title'=>'Inventario forestal de bosque en Ilobasco',
        'lang'=>'es',
        'description'=>'Conocer lo que tenemos para saber cuidarlo es la consigna de este tipo de actividades que buscan asegurar el cuido de nuestro Medio Ambiente.

Siendo una de las primeras municipalidades en la región en crear la Unidad Ambiental, la alcaldía de Ilobasco ha trabajado constantemente en proyectos de ese tipo, que tienen que ver con reforestación, limpieza, huertas escolares, educación ambiental, reciclaje entre otras.

El objetivo es identificar el tipo de flora de la zona, tomar muestras de suelo para realizar análisis de carbono de nuestros bosques.

El levantamiento lo realizó la Unidad Ambiental junto a Geólogos contratados por el Ministerio de Medio Ambiente y miembros de la comunidad en el Cantón Maquilishuat.',
      ));

      NewsTranslation::create(array(
        'id' => '12',
        'title'=>'Forest inventory in Ilobasco',
        'lang'=>'en',
        'description'=>'Knowing what we have to know how to take care of it is the slogan of this type of activities that seek to ensure the care of our Environment.

Being one of the first municipalities in the region to create the Environmental Unit, the mayor of Ilobasco has worked constantly on projects of this type, which have to do with reforestation, cleaning, school gardens, environmental education, recycling among others.

The objective is to identify the type of flora in the area, to take soil samples to perform carbon analysis of our forests.

The survey was carried out by the Environmental Unit together with Geologists hired by the Ministry of the Environment and members of the community in the Maquilishuat Canton.',
      ));

      NewsTranslation::create(array(
        'id' => '13',
        'title'=>'Fue todo un éxito',
        'lang'=>'es',
        'description'=>'Cientos de mujeres acudieron al llamado, y la "Campaña de Sensibilización en la Lucha Contra el Cáncer de Mama" fue todo un éxito.
Eliseo Castellanos, Alcalde Municipal junto Al Ing. Carlos Reyes, la Doc. Carolina Marín, La Tenchis Céliber y más invitados especiales presidieron el acto inaugural, aprovechando para felicitar a las asistentes por el interés en su salud y en la prevención de esta enfermedad que aqueja especialmente a las mujeres alrededor del mundo.
Temas de prevención, demostraciones, manejo del dolor, reconstrucción, cirugías fueron impartidos por especialistas que también rifaron descuentos y exámenes a las asistentes que se mostraron muy contentas por el conocimiento impartido y los premios recibidos.',
      ));

      NewsTranslation::create(array(
        'id' => '13',
        'title'=>'It was all a success',
        'lang'=>'en',
        'description'=>'Hundreds of women attended the call, and the "Breast Cancer Awareness Campaign" was a success.
Eliseo Castellanos, Municipal Mayor together with Ing. Carlos Reyes, Doc. Carolina Marín, Tenchis Céliber and more special guests presided over the opening ceremony, taking the opportunity to congratulate the attendees for their interest in their health and in the prevention of this disease. It especially afflicts women around the world.
Topics of prevention, demonstrations, pain management, reconstruction, surgeries were taught by specialists who also raffled off discounts and exams to the attendees who were very happy with the knowledge imparted and the awards received.',
      ));

    }
}
