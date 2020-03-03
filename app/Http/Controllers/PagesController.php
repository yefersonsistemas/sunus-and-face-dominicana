<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){

        $doctores = [
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. Víctor Pimentel',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Victor_Pimentel_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Victor_Pimentel.png',
                'especialidades'=> 'Neurocirujano Especialista en Cirugías de Columna Vertebral',
                'descripcion'=> 'Es profesional en el Centro Médico Quirúrgico Docente S&F Dominicana, y destaca por tener más de 10 años de experiencia.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD). Título: Doctor en Medicina Distinción: MAGNA CUM LAUDE, 1998-2004.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras (HDUDDC) Título: Posgrado en Neurocirugía, 2006-2012.</p>
               <p class="mb-2 text-justify"> Rotación Internacional. Departamento de Neurocirugía. Centro Médico Río Piedras, San Juan Recinto de Ciencias Médicas, Universidad de Puerto Rico, 2012.</p>
              <p class="mb-2 text-justify">Programa Avanzado de Perfeccionamiento del idioma Inglés. Professional Training System. Pearson Education, 2010.</p>',
              'descripcionPage'=>'Se graduó en el 2004 en la UASD como Doctor en Medicina, realizó su Posgrado en Neurocirugía en el Hospital Docente
              Universitario Dr. Darío Contreras, desde entonces ha tenido una amplia y prestigiosa trayectoria laboral en múltiples centros de salud,
              trabajando como Neurocirujano en lugares como el Hospital General de la Plaza de la salud, la Clínica Abreu y muchísimos más.',
              'certificados'=>[
                  'images/certifications/Dr pimentel/Asset 2.png',
                  'images/certifications/Dr pimentel/Asset 3.png',
                  'images/certifications/Dr pimentel/Asset 4.png',
                  'images/certifications/Dr pimentel/Asset 5.png',
                  'images/certifications/Dr pimentel/Asset 6.png',
                  'images/certifications/Dr pimentel/Asset 7.png'
              ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Dr. Gerson Cuevas',
                'especialidad'=> 'Traumatología',
                'imagenSlider'=> 'images/brand/carousel/Gerson_Cuevas.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Gerson_Cuevas.png',
                'especialidades'=> 'Ortopeda-Traumatologo Especialista en Columna',
                'descripcion'=> 'Es el parte de nuestro Staff Médico S&F, cuenta con una carrera de 10 años como profesional de la salud.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD) Sto. Dgo. Título: “Doctor en Medicina”, 2006.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras, Universidad Autónoma de Santo Domingo (UASD) Sto.Dgo. República Dominicana.
                  Título: Especialista en “Ortopedia y Traumatología”, 2012.</p>
               <p class="mb-2 text-justify"> Fellowship “Patología de Columna Vertebral” Fundación Hospital Ortopédico Infantil. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">  Fellowship en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">Fellow Research en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>',
              'descripcionPage'=>'Realizó sus estudios en la UASD graduándose como Doctor en Medicina en el 2006, luego entre el 2008 y
              2012 se especializó en Ortopedia y Traumatología en el Hospital Docente Universitario Dr. Darío Contreras.
              Con el transcurso de los años logró un Fellowship en Patología de Columna Vertebral en Venezuela
              finalizado en el 2017, sus estudios están reforzados con una experiencia laboral resaltable, trabajando en
              lugares como el Centro Médico Dominico Cubano, la Clínica Cruz Jiminian, Centro Médico Hispano, entre
              otros',
              'certificados'=>[
                'images/certifications/Dr Gerson Cuevas/Asset 48.png',
                'images/certifications/Dr Gerson Cuevas/Asset 49.png',
                'images/certifications/Dr Gerson Cuevas/Asset 50.png',
                'images/certifications/Dr Gerson Cuevas/Asset 51.png',
                'images/certifications/Dr Gerson Cuevas/Asset 52.png',
                'images/certifications/Dr Gerson Cuevas/Asset 53.png',
                'images/certifications/Dr Gerson Cuevas/Asset 54.png'
            ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dra. Jiset Santoni',
                'especialidad'=> 'Cirugía Maxilofacial',
                'imagenSlider'=> 'images/brand/carousel/Dra_Santoni_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Dra_Santoni.png',
                'especialidades'=> 'Especialista en Cirugía Maxilofacial',
                'descripcion'=> 'Con una gran trayectoria académica y 14 años de experiencia en el área de salud, es parte de nuestro Staff Médico S&F',
                'turno'=> 'tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..</p>
                <p class="mb-2 text-justify"> Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.</p>
               <p class="mb-2 text-justify"> Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.</p>
              <p class="mb-2 text-justify">  Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.</p>
              <p class="mb-2 text-justify">Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017</p>
              <p class="mb-2 text-justify">Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010</p>
              <p class="mb-2 text-justify">Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007</p>',
                'descripcionPage'=>'Adquirió su título de Doctora En Medicina en la UCSD en el 2005 y de Cirugía General en el 2007,
                posee un título Magíster de Cirujano Cérvico BucoMaxilofacial y un Fellow en Rinología y Cirugía
                Plástica Facial, tiene un Diplomado en Pedagogía y una Maestría en Gerencia Moderna en Salud. Ha
                realizado cursos nacionales e internaciones que van desde la Cirugía Maxilofacial hasta la Rinología. Su
                experiencia laboral ha sido adquirida gracias a sus trabajos en el Centro Médico UCE, Hospital Félix
                María Goico y otros centros de salud importantes en República Dominicana.',
                'certificados'=>[
                    'images/certifications/Dra Jiset Santoni/Asset 41.png',
                    'images/certifications/Dra Jiset Santoni/Asset 42.png',
                    'images/certifications/Dra Jiset Santoni/Asset 43.png',
                    'images/certifications/Dra Jiset Santoni/Asset 44.png',
                    'images/certifications/Dra Jiset Santoni/Asset 45.png',
                    'images/certifications/Dra Jiset Santoni/Asset 46.png',
                    'images/certifications/Dra Jiset Santoni/Asset 47.png',
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Luis de la Cruz Hernández',
                'especialidad'=> 'Cirugía cardiovascular',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano Cardiovascular',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                    'images/certifications/Dr Luis De la Cruz/Asset 55.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 56.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 57.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 58.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 59.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 61.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 62.png',
                ],
                'clase' =>'odd'

            ],
            // [
            //     'nroAfilia'=> 6,
            //     'nombre'=> 'Dr. Angel Alejandro Mora',
            //     'especialidad'=> 'Cirugía plástica',
            //     'imagenSlider'=> 'images/brand/carousel/DR.Mora_384x410.png',
            //     'imagenPagDoct'=> 'images/brand/fotos-doctores/DR.Mora_110x110.png',
            //     'especialidades'=> 'Especialista en Cirugía Plástica y Reconstructiva. Cirugía Hepática y Biliar',
            //     'turno'=> 'Mañana',
            //     'descripcion'=> 'Próximamante',
            //     'btnHorario'=> 'proximamente',
            //     'educacion'=>'Próximamante',
            //     'descripcionPage'=>'Próximamante',
            //     'certificados'=>[
            //         'images/certifications/Dr Angel Mora/Asset 62.png',
            //         'images/certifications/Dr Angel Mora/Asset 63.png',
            //         'images/certifications/Dr Angel Mora/Asset 64.png',
            //         'images/certifications/Dr Angel Mora/Asset 65.png',
            //         'images/certifications/Dr Angel Mora/Asset 66.png',
            //         'images/certifications/Dr Angel Mora/Asset 67.png',
            //         'images/certifications/Dr Angel Mora/Asset 68.png',
            //         'images/certifications/Dr Angel Mora/Asset 69.png',
            //     ],
            //     'clase' =>'jeft'

            // ],
            [
                'nroAfilia'=> 7,
                'nombre'=> 'Dr. Carlos Bautista Jimenes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano especialista en cirugía de columna vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],

            [
                'nroAfilia'=> 8,
                'nombre'=> 'Dra. Erika de los Ángeles Reyes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 9,
                'nombre'=> 'Dr. Mario Fulcar',
                'especialidad'=> 'Cirugía oncólogica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano oncólogo',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 10,
                'nombre'=> 'Dr. Emil Manzur',
                'especialidad'=> 'Neurología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neumonólogo, Intensivista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 11,
                'nombre'=> 'Dr. Alex Quiñones',
                'especialidad'=> 'Cuidados Critícos',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Emergencia, Cuidados Critícos',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 12,
                'nombre'=> 'Dr. Julio Nicolas Valerio',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Medico internista, Intensivista y cardiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 13,
                'nombre'=> 'Dra. Lucila Polanco',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 14,
                'nombre'=> 'Dra. Omaira Reyes',
                'especialidad'=> 'Oncología',
                'imagenSlider'=> 'images/brand/carousel/Omaira_Reyes.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Omaira_Reyes.png',
                'especialidades'=> 'Oncólogo, Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 15,
                'nombre'=> 'Dr. Eduardo Moore',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Médico internista, intensivista, nutricionista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 16,
                'nombre'=> 'Dra. Kelly Camargo',
                'especialidad'=> 'Obstetrica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Obstetricia, Ginecología',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 17,
                'nombre'=> 'Dr. Juan José Manzur',
                'especialidad'=> 'Gastrología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Pediatra, Gastroenterologo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 18,
                'nombre'=> 'Dr. Antonio Papaterra',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 19,
                'nombre'=> 'Dr. Freddy Antonio Flores',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Freddy_Flores.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Freddy_Flores.png',
                'especialidades'=> 'Neurocirujano, Cirujano de Columna Vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'
            ],
            [
                'nroAfilia'=> 20,
                'nombre'=> 'Dra. Isy Cedeño',
                'especialidad'=> 'Cirugía general',
                'imagenSlider'=> 'images/brand/carousel/Isy_Cedeno.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Isy_Cedeño.png',
                'especialidades'=> 'Cirujano general',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'


            ],
            [
                'nroAfilia'=> 21,
                'nombre'=> 'Dra. Ivelisse Bello',
                'especialidad'=> 'Cirugía plástica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Cirujano Plástico',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 22,
                'nombre'=> 'Dr. Sócrates Jaquez',
                'especialidad'=> 'Epidemiología',
                'imagenSlider'=> 'images/brand/carousel/Socrates_Jaquez.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Socrates_Jaquez.png',
                'especialidades'=> 'Epidemiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

        ];

        $directiva=[
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. José Miguel López Peláez',
                'imagenLong'=> 'images/brand/fotos-doctores/Pelaez_3.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-pelaez.jpg',
                'cargo'=>'Director Médico Branch',
                'correo'=>'dir.medicobranch@syfdominicana.com',
                'descripcion'=> 'Con más de 25 años de experiencia en el área de la salud, el Dr. José Miguel López Peláez se desempeña como Director Médico Branch en el Centro Médico Quirúrgico Docente S&F Dominicana.',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) República Dominicana. MAGNA CUM LAUDE. 1987-1993.</p>
               <p class="mb-2 text-justify"> Hospital Militar Dr. Ramón de Lara FAD. República Dominicana. Especialidad en anestesiología. 1994-1998.</p>
              <p class="mb-2 text-justify"> Hospital La Timone, Marsella, Francia. Post-grado anestesiología cardio toráxica. 1998-1999.</p>
             <p class="mb-2 text-justify">  Universidad Central del Este, San Pedro de Macoris. Post-grado en Anestesiología. 216.</p>',
              'descripcionPage'=>'<p class="text-justify">Como Director Médico Branch del Centro Médico Quirúrgico Docente S&F Dominicana, el Dr. José Miguel
              López Peláez es un gran ejemplo de solidez y exitosa trayectoria, dedicado siempre al bienestar de sus
              paciente, al trabajo en equipo y la materialización de los objetivos, es un profesional con
              inmensurables valores, convirtiéndolo en una persona excepcional. Su carrera médica tuvo sus inicios
              en 1993, egresando con mención honorífica de la Universidad Tecnológica de Santiago como Doctor en
              Medicina, posteriormente en el año 1998 recibe su titulación como especialista en Anestesiología del
              Hospital Militar Dr. Ramón de Lara…</p>
            <p class="text-justify">El Dr. López Peláez tiene experiencia en gestión ejecutiva, planificación estratégica de programas,
              finanzas y gestión operativa tanto en el sector público como en el privado. Bajo su dirección, S&F se
              proyecta como una organización que atenderá a más de 60,000 personas anualmente, garantizando un
              programa de salud afiliado a las mejores aseguradoras del país junto con equipos médicos de última
              tecnología.</p>',
              'certificados'=>[
                  'images/certifications/Dr. Jose Lopez/Asset 34.png',
                  'images/certifications/Dr. Jose Lopez/Asset 35.png',
                  'images/certifications/Dr. Jose Lopez/Asset 36.png',
                  'images/certifications/Dr. Jose Lopez/Asset 37.png',
                  'images/certifications/Dr. Jose Lopez/Asset 38.png',
                  'images/certifications/Dr. Jose Lopez/Asset 39.png',
                  'images/certifications/Dr. Jose Lopez/Asset 40.png',
              ]
            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Sra. Olga Cruz de López',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'cargo'=>'Director de Calidad',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[

              ]
            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dr. José Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'cargo'=>'Director Médico especialidad Sinus',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'educacion'=>'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Jose Pastor Linarez/Asset 8.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 9.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 10.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 11.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 12.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 13.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 14.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 15.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 16.png',

              ]
            ],
            [
                'nroAfilia'=> 4,
                'nombre'=> 'Dra. Natalia Alejandra Neira Araya',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'cargo'=>'Director Médico especialidad Face',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                 'images/certifications/Dra Natalia Neira/Asset 17.png',
                 'images/certifications/Dra Natalia Neira/Asset 18.png',
                 'images/certifications/Dra Natalia Neira/Asset 19.png',
                 'images/certifications/Dra Natalia Neira/Asset 20.png',
                 'images/certifications/Dra Natalia Neira/Asset 21.png',
                 'images/certifications/Dra Natalia Neira/Asset 22.png',
                 'images/certifications/Dra Natalia Neira/Asset 23.png',
                 'images/certifications/Dra Natalia Neira/Asset 24.png',
                 'images/certifications/Dra Natalia Neira/Asset 25.png',
                 'images/certifications/Dra Natalia Neira/Asset 26.png',
                 'images/certifications/Dra Natalia Neira/Asset 27.png',
              ]
            ],
            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Junior Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'cargo'=>'Director de Franquicia',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'descripcionPage'=>'Próximamente',
                'educacion'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Junior Linarez/Asset 28.png',
                  'images/certifications/Dr Junior Linarez/Asset 29.png',
                  'images/certifications/Dr Junior Linarez/Asset 30.png',
                  'images/certifications/Dr Junior Linarez/Asset 31.png',
                  'images/certifications/Dr Junior Linarez/Asset 32.png',
                  'images/certifications/Dr Junior Linarez/Asset 33.png',
              ]
            ],
        ];


        return view('inicio', compact('doctores'));
    }

    public function doctores(){
        $doctores = [
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. Víctor Pimentel',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Victor_Pimentel_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Victor_Pimentel.png',
                'especialidades'=> 'Neurocirujano Especialista en Cirugías de Columna Vertebral',
                'descripcion'=> 'Es profesional en el Centro Médico Quirúrgico Docente S&F Dominicana, y destaca por tener más de 10 años de experiencia.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD). Título: Doctor en Medicina Distinción: MAGNA CUM LAUDE, 1998-2004.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras (HDUDDC) Título: Posgrado en Neurocirugía, 2006-2012.</p>
               <p class="mb-2 text-justify"> Rotación Internacional. Departamento de Neurocirugía. Centro Médico Río Piedras, San Juan Recinto de Ciencias Médicas, Universidad de Puerto Rico, 2012.</p>
              <p class="mb-2 text-justify">Programa Avanzado de Perfeccionamiento del idioma Inglés. Professional Training System. Pearson Education, 2010.</p>',
              'descripcionPage'=>'Se graduó en el 2004 en la UASD como Doctor en Medicina, realizó su Posgrado en Neurocirugía en el Hospital Docente
              Universitario Dr. Darío Contreras, desde entonces ha tenido una amplia y prestigiosa trayectoria laboral en múltiples centros de salud,
              trabajando como Neurocirujano en lugares como el Hospital General de la Plaza de la salud, la Clínica Abreu y muchísimos más.',
              'certificados'=>[
                  'images/certifications/Dr pimentel/Asset 2.png',
                  'images/certifications/Dr pimentel/Asset 3.png',
                  'images/certifications/Dr pimentel/Asset 4.png',
                  'images/certifications/Dr pimentel/Asset 5.png',
                  'images/certifications/Dr pimentel/Asset 6.png',
                  'images/certifications/Dr pimentel/Asset 7.png'
              ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Dr. Gerson Cuevas',
                'especialidad'=> 'Traumatología',
                'imagenSlider'=> 'images/brand/carousel/Gerson_Cuevas.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Gerson_Cuevas.png',
                'especialidades'=> 'Ortopeda-Traumatologo Especialista en Columna',
                'descripcion'=> 'Es el parte de nuestro Staff Médico S&F, cuenta con una carrera de 10 años como profesional de la salud.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD) Sto. Dgo. Título: “Doctor en Medicina”, 2006.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras, Universidad Autónoma de Santo Domingo (UASD) Sto.Dgo. República Dominicana.
                  Título: Especialista en “Ortopedia y Traumatología”, 2012.</p>
               <p class="mb-2 text-justify"> Fellowship “Patología de Columna Vertebral” Fundación Hospital Ortopédico Infantil. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">  Fellowship en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">Fellow Research en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>',
              'descripcionPage'=>'Realizó sus estudios en la UASD graduándose como Doctor en Medicina en el 2006, luego entre el 2008 y
              2012 se especializó en Ortopedia y Traumatología en el Hospital Docente Universitario Dr. Darío Contreras.
              Con el transcurso de los años logró un Fellowship en Patología de Columna Vertebral en Venezuela
              finalizado en el 2017, sus estudios están reforzados con una experiencia laboral resaltable, trabajando en
              lugares como el Centro Médico Dominico Cubano, la Clínica Cruz Jiminian, Centro Médico Hispano, entre
              otros',
              'certificados'=>[
                'images/certifications/Dr Gerson Cuevas/Asset 48.png',
                'images/certifications/Dr Gerson Cuevas/Asset 49.png',
                'images/certifications/Dr Gerson Cuevas/Asset 50.png',
                'images/certifications/Dr Gerson Cuevas/Asset 51.png',
                'images/certifications/Dr Gerson Cuevas/Asset 52.png',
                'images/certifications/Dr Gerson Cuevas/Asset 53.png',
                'images/certifications/Dr Gerson Cuevas/Asset 54.png'
            ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dra. Jiset Santoni',
                'especialidad'=> 'Cirugía Maxilofacial',
                'imagenSlider'=> 'images/brand/carousel/Dra_Santoni_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Dra_Santoni.png',
                'especialidades'=> 'Especialista en Cirugía Maxilofacial',
                'descripcion'=> 'Con una gran trayectoria académica y 14 años de experiencia en el área de salud, es parte de nuestro Staff Médico S&F',
                'turno'=> 'tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..</p>
                <p class="mb-2 text-justify"> Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.</p>
               <p class="mb-2 text-justify"> Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.</p>
              <p class="mb-2 text-justify">  Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.</p>
              <p class="mb-2 text-justify">Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017</p>
              <p class="mb-2 text-justify">Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010</p>
              <p class="mb-2 text-justify">Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007</p>',
                'descripcionPage'=>'Adquirió su título de Doctora En Medicina en la UCSD en el 2005 y de Cirugía General en el 2007,
                posee un título Magíster de Cirujano Cérvico BucoMaxilofacial y un Fellow en Rinología y Cirugía
                Plástica Facial, tiene un Diplomado en Pedagogía y una Maestría en Gerencia Moderna en Salud. Ha
                realizado cursos nacionales e internaciones que van desde la Cirugía Maxilofacial hasta la Rinología. Su
                experiencia laboral ha sido adquirida gracias a sus trabajos en el Centro Médico UCE, Hospital Félix
                María Goico y otros centros de salud importantes en República Dominicana.',
                'certificados'=>[
                    'images/certifications/Dra Jiset Santoni/Asset 41.png',
                    'images/certifications/Dra Jiset Santoni/Asset 42.png',
                    'images/certifications/Dra Jiset Santoni/Asset 43.png',
                    'images/certifications/Dra Jiset Santoni/Asset 44.png',
                    'images/certifications/Dra Jiset Santoni/Asset 45.png',
                    'images/certifications/Dra Jiset Santoni/Asset 46.png',
                    'images/certifications/Dra Jiset Santoni/Asset 47.png',
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Luis de la Cruz Hernández',
                'especialidad'=> 'Cirugía cardiovascular',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano Cardiovascular',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                    'images/certifications/Dr Luis De la Cruz/Asset 55.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 56.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 57.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 58.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 59.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 61.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 62.png',
                ],
                'clase' =>'odd'

            ],
            // [
            //     'nroAfilia'=> 6,
            //     'nombre'=> 'Dr. Angel Alejandro Mora',
            //     'especialidad'=> 'Cirugía plástica',
            //     'imagenSlider'=> 'images/brand/carousel/DR.Mora_384x410.png',
            //     'imagenPagDoct'=> 'images/brand/fotos-doctores/DR.Mora_110x110.png',
            //     'especialidades'=> 'Especialista en Cirugía Plástica y Reconstructiva. Cirugía Hepática y Biliar',
            //     'turno'=> 'Mañana',
            //     'descripcion'=> 'Próximamante',
            //     'btnHorario'=> 'proximamente',
            //     'educacion'=>'Próximamante',
            //     'descripcionPage'=>'Próximamante',
            //     'certificados'=>[
            //         'images/certifications/Dr Angel Mora/Asset 62.png',
            //         'images/certifications/Dr Angel Mora/Asset 63.png',
            //         'images/certifications/Dr Angel Mora/Asset 64.png',
            //         'images/certifications/Dr Angel Mora/Asset 65.png',
            //         'images/certifications/Dr Angel Mora/Asset 66.png',
            //         'images/certifications/Dr Angel Mora/Asset 67.png',
            //         'images/certifications/Dr Angel Mora/Asset 68.png',
            //         'images/certifications/Dr Angel Mora/Asset 69.png',
            //     ],
            //     'clase' =>'jeft'

            // ],
            [
                'nroAfilia'=> 7,
                'nombre'=> 'Dr. Carlos Bautista Jimenes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano especialista en cirugía de columna vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],

            [
                'nroAfilia'=> 8,
                'nombre'=> 'Dra. Erika de los Ángeles Reyes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 9,
                'nombre'=> 'Dr. Mario Fulcar',
                'especialidad'=> 'Cirugía oncólogica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano oncólogo',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 10,
                'nombre'=> 'Dr. Emil Manzur',
                'especialidad'=> 'Neurología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neumonólogo, Intensivista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 11,
                'nombre'=> 'Dr. Alex Quiñones',
                'especialidad'=> 'Cuidados Critícos',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Emergencia, Cuidados Critícos',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 12,
                'nombre'=> 'Dr. Julio Nicolas Valerio',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Medico internista, Intensivista y cardiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 13,
                'nombre'=> 'Dra. Lucila Polanco',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 14,
                'nombre'=> 'Dra. Omaira Reyes',
                'especialidad'=> 'Oncología',
                'imagenSlider'=> 'images/brand/carousel/Omaira_Reyes.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Omaira_Reyes.png',
                'especialidades'=> 'Oncólogo, Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 15,
                'nombre'=> 'Dr. Eduardo Moore',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Médico internista, intensivista, nutricionista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 16,
                'nombre'=> 'Dra. Kelly Camargo',
                'especialidad'=> 'Obstetrica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Obstetricia, Ginecología',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 17,
                'nombre'=> 'Dr. Juan José Manzur',
                'especialidad'=> 'Gastrología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Pediatra, Gastroenterologo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 18,
                'nombre'=> 'Dr. Antonio Papaterra',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 19,
                'nombre'=> 'Dr. Freddy Antonio Flores',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Freddy_Flores.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Freddy_Flores.png',
                'especialidades'=> 'Neurocirujano, Cirujano de Columna Vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'
            ],
            [
                'nroAfilia'=> 20,
                'nombre'=> 'Dra. Isy Cedeño',
                'especialidad'=> 'Cirugía general',
                'imagenSlider'=> 'images/brand/carousel/Isy_Cedeno.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Isy_Cedeño.png',
                'especialidades'=> 'Cirujano general',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'


            ],
            [
                'nroAfilia'=> 21,
                'nombre'=> 'Dra. Ivelisse Bello',
                'especialidad'=> 'Cirugía plástica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Cirujano Plástico',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 22,
                'nombre'=> 'Dr. Sócrates Jaquez',
                'especialidad'=> 'Epidemiología',
                'imagenSlider'=> 'images/brand/carousel/Socrates_Jaquez.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Socrates_Jaquez.png',
                'especialidades'=> 'Epidemiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

        ];
        return view('doctores', compact('doctores'));
    }

    public function servicios(){
        return view('servicios');
    }

    public function horario(){
        return view('horario');
    }

    public function calendario(){
        return view('calendario');
    }

    public function sedes(){
        $doctores = [
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. Víctor Pimentel',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Victor_Pimentel_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Victor_Pimentel.png',
                'especialidades'=> 'Neurocirujano Especialista en Cirugías de Columna Vertebral',
                'descripcion'=> 'Es profesional en el Centro Médico Quirúrgico Docente S&F Dominicana, y destaca por tener más de 10 años de experiencia.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD). Título: Doctor en Medicina Distinción: MAGNA CUM LAUDE, 1998-2004.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras (HDUDDC) Título: Posgrado en Neurocirugía, 2006-2012.</p>
               <p class="mb-2 text-justify"> Rotación Internacional. Departamento de Neurocirugía. Centro Médico Río Piedras, San Juan Recinto de Ciencias Médicas, Universidad de Puerto Rico, 2012.</p>
              <p class="mb-2 text-justify">Programa Avanzado de Perfeccionamiento del idioma Inglés. Professional Training System. Pearson Education, 2010.</p>',
              'descripcionPage'=>'Se graduó en el 2004 en la UASD como Doctor en Medicina, realizó su Posgrado en Neurocirugía en el Hospital Docente
              Universitario Dr. Darío Contreras, desde entonces ha tenido una amplia y prestigiosa trayectoria laboral en múltiples centros de salud,
              trabajando como Neurocirujano en lugares como el Hospital General de la Plaza de la salud, la Clínica Abreu y muchísimos más.',
              'certificados'=>[
                  'images/certifications/Dr pimentel/Asset 2.png',
                  'images/certifications/Dr pimentel/Asset 3.png',
                  'images/certifications/Dr pimentel/Asset 4.png',
                  'images/certifications/Dr pimentel/Asset 5.png',
                  'images/certifications/Dr pimentel/Asset 6.png',
                  'images/certifications/Dr pimentel/Asset 7.png'
              ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Dr. Gerson Cuevas',
                'especialidad'=> 'Traumatología',
                'imagenSlider'=> 'images/brand/carousel/Gerson_Cuevas.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Gerson_Cuevas.png',
                'especialidades'=> 'Ortopeda-Traumatologo Especialista en Columna',
                'descripcion'=> 'Es el parte de nuestro Staff Médico S&F, cuenta con una carrera de 10 años como profesional de la salud.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD) Sto. Dgo. Título: “Doctor en Medicina”, 2006.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras, Universidad Autónoma de Santo Domingo (UASD) Sto.Dgo. República Dominicana.
                  Título: Especialista en “Ortopedia y Traumatología”, 2012.</p>
               <p class="mb-2 text-justify"> Fellowship “Patología de Columna Vertebral” Fundación Hospital Ortopédico Infantil. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">  Fellowship en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">Fellow Research en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>',
              'descripcionPage'=>'Realizó sus estudios en la UASD graduándose como Doctor en Medicina en el 2006, luego entre el 2008 y
              2012 se especializó en Ortopedia y Traumatología en el Hospital Docente Universitario Dr. Darío Contreras.
              Con el transcurso de los años logró un Fellowship en Patología de Columna Vertebral en Venezuela
              finalizado en el 2017, sus estudios están reforzados con una experiencia laboral resaltable, trabajando en
              lugares como el Centro Médico Dominico Cubano, la Clínica Cruz Jiminian, Centro Médico Hispano, entre
              otros',
              'certificados'=>[
                'images/certifications/Dr Gerson Cuevas/Asset 48.png',
                'images/certifications/Dr Gerson Cuevas/Asset 49.png',
                'images/certifications/Dr Gerson Cuevas/Asset 50.png',
                'images/certifications/Dr Gerson Cuevas/Asset 51.png',
                'images/certifications/Dr Gerson Cuevas/Asset 52.png',
                'images/certifications/Dr Gerson Cuevas/Asset 53.png',
                'images/certifications/Dr Gerson Cuevas/Asset 54.png'
            ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dra. Jiset Santoni',
                'especialidad'=> 'Cirugía Maxilofacial',
                'imagenSlider'=> 'images/brand/carousel/Dra_Santoni_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Dra_Santoni.png',
                'especialidades'=> 'Especialista en Cirugía Maxilofacial',
                'descripcion'=> 'Con una gran trayectoria académica y 14 años de experiencia en el área de salud, es parte de nuestro Staff Médico S&F',
                'turno'=> 'tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..</p>
                <p class="mb-2 text-justify"> Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.</p>
               <p class="mb-2 text-justify"> Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.</p>
              <p class="mb-2 text-justify">  Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.</p>
              <p class="mb-2 text-justify">Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017</p>
              <p class="mb-2 text-justify">Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010</p>
              <p class="mb-2 text-justify">Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007</p>',
                'descripcionPage'=>'Adquirió su título de Doctora En Medicina en la UCSD en el 2005 y de Cirugía General en el 2007,
                posee un título Magíster de Cirujano Cérvico BucoMaxilofacial y un Fellow en Rinología y Cirugía
                Plástica Facial, tiene un Diplomado en Pedagogía y una Maestría en Gerencia Moderna en Salud. Ha
                realizado cursos nacionales e internaciones que van desde la Cirugía Maxilofacial hasta la Rinología. Su
                experiencia laboral ha sido adquirida gracias a sus trabajos en el Centro Médico UCE, Hospital Félix
                María Goico y otros centros de salud importantes en República Dominicana.',
                'certificados'=>[
                    'images/certifications/Dra Jiset Santoni/Asset 41.png',
                    'images/certifications/Dra Jiset Santoni/Asset 42.png',
                    'images/certifications/Dra Jiset Santoni/Asset 43.png',
                    'images/certifications/Dra Jiset Santoni/Asset 44.png',
                    'images/certifications/Dra Jiset Santoni/Asset 45.png',
                    'images/certifications/Dra Jiset Santoni/Asset 46.png',
                    'images/certifications/Dra Jiset Santoni/Asset 47.png',
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Luis de la Cruz Hernández',
                'especialidad'=> 'Cirugía cardiovascular',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano Cardiovascular',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                    'images/certifications/Dr Luis De la Cruz/Asset 55.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 56.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 57.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 58.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 59.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 61.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 62.png',
                ],
                'clase' =>'odd'

            ],
            // [
            //     'nroAfilia'=> 6,
            //     'nombre'=> 'Dr. Angel Alejandro Mora',
            //     'especialidad'=> 'Cirugía plástica',
            //     'imagenSlider'=> 'images/brand/carousel/DR.Mora_384x410.png',
            //     'imagenPagDoct'=> 'images/brand/fotos-doctores/DR.Mora_110x110.png',
            //     'especialidades'=> 'Especialista en Cirugía Plástica y Reconstructiva. Cirugía Hepática y Biliar',
            //     'turno'=> 'Mañana',
            //     'descripcion'=> 'Próximamante',
            //     'btnHorario'=> 'proximamente',
            //     'educacion'=>'Próximamante',
            //     'descripcionPage'=>'Próximamante',
            //     'certificados'=>[
            //         'images/certifications/Dr Angel Mora/Asset 62.png',
            //         'images/certifications/Dr Angel Mora/Asset 63.png',
            //         'images/certifications/Dr Angel Mora/Asset 64.png',
            //         'images/certifications/Dr Angel Mora/Asset 65.png',
            //         'images/certifications/Dr Angel Mora/Asset 66.png',
            //         'images/certifications/Dr Angel Mora/Asset 67.png',
            //         'images/certifications/Dr Angel Mora/Asset 68.png',
            //         'images/certifications/Dr Angel Mora/Asset 69.png',
            //     ],
            //     'clase' =>'jeft'

            // ],
            [
                'nroAfilia'=> 7,
                'nombre'=> 'Dr. Carlos Bautista Jimenes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano especialista en cirugía de columna vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],

            [
                'nroAfilia'=> 8,
                'nombre'=> 'Dra. Erika de los Ángeles Reyes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 9,
                'nombre'=> 'Dr. Mario Fulcar',
                'especialidad'=> 'Cirugía oncólogica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano oncólogo',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 10,
                'nombre'=> 'Dr. Emil Manzur',
                'especialidad'=> 'Neurología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neumonólogo, Intensivista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 11,
                'nombre'=> 'Dr. Alex Quiñones',
                'especialidad'=> 'Cuidados Critícos',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Emergencia, Cuidados Critícos',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 12,
                'nombre'=> 'Dr. Julio Nicolas Valerio',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Medico internista, Intensivista y cardiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 13,
                'nombre'=> 'Dra. Lucila Polanco',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 14,
                'nombre'=> 'Dra. Omaira Reyes',
                'especialidad'=> 'Oncología',
                'imagenSlider'=> 'images/brand/carousel/Omaira_Reyes.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Omaira_Reyes.png',
                'especialidades'=> 'Oncólogo, Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 15,
                'nombre'=> 'Dr. Eduardo Moore',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Médico internista, intensivista, nutricionista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 16,
                'nombre'=> 'Dra. Kelly Camargo',
                'especialidad'=> 'Obstetrica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Obstetricia, Ginecología',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 17,
                'nombre'=> 'Dr. Juan José Manzur',
                'especialidad'=> 'Gastrología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Pediatra, Gastroenterologo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 18,
                'nombre'=> 'Dr. Antonio Papaterra',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 19,
                'nombre'=> 'Dr. Freddy Antonio Flores',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Freddy_Flores.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Freddy_Flores.png',
                'especialidades'=> 'Neurocirujano, Cirujano de Columna Vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'
            ],
            [
                'nroAfilia'=> 20,
                'nombre'=> 'Dra. Isy Cedeño',
                'especialidad'=> 'Cirugía general',
                'imagenSlider'=> 'images/brand/carousel/Isy_Cedeno.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Isy_Cedeño.png',
                'especialidades'=> 'Cirujano general',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'


            ],
            [
                'nroAfilia'=> 21,
                'nombre'=> 'Dra. Ivelisse Bello',
                'especialidad'=> 'Cirugía plástica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Cirujano Plástico',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 22,
                'nombre'=> 'Dr. Sócrates Jaquez',
                'especialidad'=> 'Epidemiología',
                'imagenSlider'=> 'images/brand/carousel/Socrates_Jaquez.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Socrates_Jaquez.png',
                'especialidades'=> 'Epidemiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

        ];

        $sedes=[
            [   'id'=>1,
                'lugar'=>'Ensache Naco',
                'nombre'=>'Centro Profesional',
                'descripcionLittle'=>'Nuestro prestigioso complejo ubicado en Ensanche Naco brinda a todo el público acceso a los servicios de Consultas Clínicas, Procedimientos Ambulatorios y Clínica Dental. Abiertos de Lunes a Viernes.',
                'icono'=>'images/brand/sedes/Consultorio-01.svg',
                'imagen'=>'images/brand/sedes/Sede_Naco_NOV2019.jpg',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.103020252254!2d-69.92679498510789!3d18.4789921874332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89c4056778bb%3A0xea893b7a8898ec6f!2sCalle%20Pdte%20Gonz%C3%A1lez%204%2C%20Santo%20Domingo%2C%20Rep%C3%BAblica%20Dominicana!5e0!3m2!1ses-419!2sve!4v1575582312338!5m2!1ses-419!2sve',
                'tag'=>'',
                'classOrden1'=>'',
                'classOrden2'=>'',
                'slogan'=>'Disponemos del mejor personal altamente capacitado y profesional para asegurar tu bienestar.',
                'address'=>'Calle presidente González, entre calle Luis Lembert y calle Manuel E. Perdomo local N-4, Naco zona metropolitana, DO',
                'descripcionPage'=>'Cuentan con el mejor servicio en Consultas Clínicas, Procedimientos Ambulatorios y Clínica Dental, además de brindarte la mejor atención personalizada.',
                'doctores'=>[
                    1,2,3,4,5,7
                ],

            ],
            [
                'id'=>2,
                'lugar'=>'El Vergel',
                'nombre'=>'Centro Quirúrgico',
                'descripcionLittle'=>'Nuestra sede Quirúrgica, es la encargada de ofrecer todos los servicios de Emergencia, Hospitalización, Cirugía y Terapia Intensiva.',
                'icono'=>'images/brand/sedes/Clinica-01.svg',
                'imagen'=>'images/brand/sedes/Sede_Vergel.jpg',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.3000659239124!2d-69.92270068510143!3d18.470062475537503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89da425ed03b%3A0xa90c528a1c84867d!2sCalle%20El%20Vergel%2027%2C%20Santo%20Domingo%2010107%2C%20Rep%C3%BAblica%20Dominicana!5e0!3m2!1ses!2sve!4v1573764920507!5m2!1ses!2sve',
                'tag'=>'Próximamente',
                'classOrden1'=>'order-1',
                'classOrden2'=>'order-2',
                'slogan'=>'',
                'address'=>'',
                'descripcionPage'=>'',
                'doctores'=>[
                ],
            ]
            ];
        return view('sedes', compact('sedes', 'doctores'));
    }

    public function alianzas(){
        return view('alianzas');
    }

    public function sobre(){
        $director = [

                'nroAfilia'=> 1,
                'nombre'=> 'Dr. José Miguel López Peláez',
                'imagenLong'=> 'images/brand/fotos-doctores/Pelaez_3.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-pelaez.jpg',
                'cargo'=>'Director Médico Branch',
                'correo'=>'dir.medicobranch@syfdominicana.com',
                'descripcion'=> 'Con más de 25 años de experiencia en el área de la salud, el Dr. José Miguel López Peláez se desempeña como Director Médico Branch en el Centro Médico Quirúrgico Docente S&F Dominicana.',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) República Dominicana. MAGNA CUM LAUDE. 1987-1993.</p>
                <p class="mb-2 text-justify"> Hospital Militar Dr. Ramón de Lara FAD. República Dominicana. Especialidad en anestesiología. 1994-1998.</p>
                <p class="mb-2 text-justify"> Hospital La Timone, Marsella, Francia. Post-grado anestesiología cardio toráxica. 1998-1999.</p>
                <p class="mb-2 text-justify">  Universidad Central del Este, San Pedro de Macoris. Post-grado en Anestesiología. 216.</p>',
                'descripcionPage'=>'<p class="text-justify">Como Director Médico Branch del Centro Médico Quirúrgico Docente S&F Dominicana, el Dr. José Miguel
                López Peláez es un gran ejemplo de solidez y exitosa trayectoria, dedicado siempre al bienestar de sus
                paciente, al trabajo en equipo y la materialización de los objetivos, es un profesional con
                inmensurables valores, convirtiéndolo en una persona excepcional. Su carrera médica tuvo sus inicios
                en 1993, egresando con mención honorífica de la Universidad Tecnológica de Santiago como Doctor en
                Medicina, posteriormente en el año 1998 recibe su titulación como especialista en Anestesiología del
                Hospital Militar Dr. Ramón de Lara…</p>
                <p class="text-justify">El Dr. López Peláez tiene experiencia en gestión ejecutiva, planificación estratégica de programas,
                finanzas y gestión operativa tanto en el sector público como en el privado. Bajo su dirección, S&F se
                proyecta como una organización que atenderá a más de 60,000 personas anualmente, garantizando un
                programa de salud afiliado a las mejores aseguradoras del país junto con equipos médicos de última
                tecnología.</p>',
                'certificados'=>[
                    'images/certifications/Dr. Jose Lopez/Asset 34.png',
                    'images/certifications/Dr. Jose Lopez/Asset 35.png',
                    'images/certifications/Dr. Jose Lopez/Asset 36.png',
                    'images/certifications/Dr. Jose Lopez/Asset 37.png',
                    'images/certifications/Dr. Jose Lopez/Asset 38.png',
                    'images/certifications/Dr. Jose Lopez/Asset 39.png',
                    'images/certifications/Dr. Jose Lopez/Asset 40.png',
            ]

    ];
        $directiva=[
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. José Miguel López Peláez',
                'imagenLong'=> 'images/brand/fotos-doctores/Pelaez_3.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-pelaez.jpg',
                'cargo'=>'Director Médico Branch',
                'correo'=>'dir.medicobranch@syfdominicana.com',
                'descripcion'=> 'Con más de 25 años de experiencia en el área de la salud, el Dr. José Miguel López Peláez se desempeña como Director Médico Branch en el Centro Médico Quirúrgico Docente S&F Dominicana.',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) República Dominicana. MAGNA CUM LAUDE. 1987-1993.</p>
               <p class="mb-2 text-justify"> Hospital Militar Dr. Ramón de Lara FAD. República Dominicana. Especialidad en anestesiología. 1994-1998.</p>
              <p class="mb-2 text-justify"> Hospital La Timone, Marsella, Francia. Post-grado anestesiología cardio toráxica. 1998-1999.</p>
             <p class="mb-2 text-justify">  Universidad Central del Este, San Pedro de Macoris. Post-grado en Anestesiología. 216.</p>',
              'descripcionPage'=>'<p class="text-justify">Como Director Médico Branch del Centro Médico Quirúrgico Docente S&F Dominicana, el Dr. José Miguel
              López Peláez es un gran ejemplo de solidez y exitosa trayectoria, dedicado siempre al bienestar de sus
              paciente, al trabajo en equipo y la materialización de los objetivos, es un profesional con
              inmensurables valores, convirtiéndolo en una persona excepcional. Su carrera médica tuvo sus inicios
              en 1993, egresando con mención honorífica de la Universidad Tecnológica de Santiago como Doctor en
              Medicina, posteriormente en el año 1998 recibe su titulación como especialista en Anestesiología del
              Hospital Militar Dr. Ramón de Lara…</p>
            <p class="text-justify">El Dr. López Peláez tiene experiencia en gestión ejecutiva, planificación estratégica de programas,
              finanzas y gestión operativa tanto en el sector público como en el privado. Bajo su dirección, S&F se
              proyecta como una organización que atenderá a más de 60,000 personas anualmente, garantizando un
              programa de salud afiliado a las mejores aseguradoras del país junto con equipos médicos de última
              tecnología.</p>',
              'certificados'=>[
                  'images/certifications/Dr. Jose Lopez/Asset 34.png',
                  'images/certifications/Dr. Jose Lopez/Asset 35.png',
                  'images/certifications/Dr. Jose Lopez/Asset 36.png',
                  'images/certifications/Dr. Jose Lopez/Asset 37.png',
                  'images/certifications/Dr. Jose Lopez/Asset 38.png',
                  'images/certifications/Dr. Jose Lopez/Asset 39.png',
                  'images/certifications/Dr. Jose Lopez/Asset 40.png',
              ]
            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Sra. Olga Cruz de López',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'cargo'=>'Director de Calidad',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[

              ]
            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dr. José Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'cargo'=>'Director Médico especialidad Sinus',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'educacion'=>'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Jose Pastor Linarez/Asset 8.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 9.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 10.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 11.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 12.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 13.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 14.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 15.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 16.png',

              ]
            ],
            [
                'nroAfilia'=> 4,
                'nombre'=> 'Dra. Natalia Alejandra Neira Araya',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'cargo'=>'Director Médico especialidad Face',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                 'images/certifications/Dra Natalia Neira/Asset 17.png',
                 'images/certifications/Dra Natalia Neira/Asset 18.png',
                 'images/certifications/Dra Natalia Neira/Asset 19.png',
                 'images/certifications/Dra Natalia Neira/Asset 20.png',
                 'images/certifications/Dra Natalia Neira/Asset 21.png',
                 'images/certifications/Dra Natalia Neira/Asset 22.png',
                 'images/certifications/Dra Natalia Neira/Asset 23.png',
                 'images/certifications/Dra Natalia Neira/Asset 24.png',
                 'images/certifications/Dra Natalia Neira/Asset 25.png',
                 'images/certifications/Dra Natalia Neira/Asset 26.png',
                 'images/certifications/Dra Natalia Neira/Asset 27.png',
              ]
            ],
            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Junior Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'cargo'=>'Director de Franquicia',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'descripcionPage'=>'Próximamente',
                'educacion'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Junior Linarez/Asset 28.png',
                  'images/certifications/Dr Junior Linarez/Asset 29.png',
                  'images/certifications/Dr Junior Linarez/Asset 30.png',
                  'images/certifications/Dr Junior Linarez/Asset 31.png',
                  'images/certifications/Dr Junior Linarez/Asset 32.png',
                  'images/certifications/Dr Junior Linarez/Asset 33.png',
              ]
            ],
        ];
        return view('sobre', compact('directiva', 'director'));
    }

    public function directivauno($id){
        $directiva=[
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. José Miguel López Peláez',
                'imagenLong'=> 'images/brand/fotos-doctores/Pelaez_3.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-pelaez.jpg',
                'cargo'=>'Director Médico Branch',
                'correo'=>'dir.medicobranch@syfdominicana.com',
                'descripcion'=> 'Con más de 25 años de experiencia en el área de la salud, el Dr. José Miguel López Peláez se desempeña como Director Médico Branch en el Centro Médico Quirúrgico Docente S&F Dominicana.',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) República Dominicana. MAGNA CUM LAUDE. 1987-1993.</p>
               <p class="mb-2 text-justify"> Hospital Militar Dr. Ramón de Lara FAD. República Dominicana. Especialidad en anestesiología. 1994-1998.</p>
              <p class="mb-2 text-justify"> Hospital La Timone, Marsella, Francia. Post-grado anestesiología cardio toráxica. 1998-1999.</p>
             <p class="mb-2 text-justify">  Universidad Central del Este, San Pedro de Macoris. Post-grado en Anestesiología. 216.</p>',
              'descripcionPage'=>'<p class="text-justify">Como Director Médico Branch del Centro Médico Quirúrgico Docente S&F Dominicana, el Dr. José Miguel
              López Peláez es un gran ejemplo de solidez y exitosa trayectoria, dedicado siempre al bienestar de sus
              paciente, al trabajo en equipo y la materialización de los objetivos, es un profesional con
              inmensurables valores, convirtiéndolo en una persona excepcional. Su carrera médica tuvo sus inicios
              en 1993, egresando con mención honorífica de la Universidad Tecnológica de Santiago como Doctor en
              Medicina, posteriormente en el año 1998 recibe su titulación como especialista en Anestesiología del
              Hospital Militar Dr. Ramón de Lara…</p>
            <p class="text-justify">El Dr. López Peláez tiene experiencia en gestión ejecutiva, planificación estratégica de programas,
              finanzas y gestión operativa tanto en el sector público como en el privado. Bajo su dirección, S&F se
              proyecta como una organización que atenderá a más de 60,000 personas anualmente, garantizando un
              programa de salud afiliado a las mejores aseguradoras del país junto con equipos médicos de última
              tecnología.</p>',
              'certificados'=>[
                  'images/certifications/Dr. Jose Lopez/Asset 34.png',
                  'images/certifications/Dr. Jose Lopez/Asset 35.png',
                  'images/certifications/Dr. Jose Lopez/Asset 36.png',
                  'images/certifications/Dr. Jose Lopez/Asset 37.png',
                  'images/certifications/Dr. Jose Lopez/Asset 38.png',
                  'images/certifications/Dr. Jose Lopez/Asset 39.png',
                  'images/certifications/Dr. Jose Lopez/Asset 40.png',
              ]
            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Sra. Olga Cruz de López',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_sra-olga-cruz.jpg',
                'cargo'=>'Director de Calidad',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[

              ]
            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dr. José Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-jose-linarez.jpg',
                'cargo'=>'Director Médico especialidad Sinus',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'educacion'=>'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Jose Pastor Linarez/Asset 8.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 9.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 10.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 11.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 12.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 13.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 14.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 15.png',
                  'images/certifications/Dr Jose Pastor Linarez/Asset 16.png',

              ]
            ],
            [
                'nroAfilia'=> 4,
                'nombre'=> 'Dra. Natalia Alejandra Neira Araya',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dra-natalia-neira04.jpg',
                'cargo'=>'Director Médico especialidad Face',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
              'descripcionPage'=>'Próximamente',
              'certificados'=>[
                 'images/certifications/Dra Natalia Neira/Asset 17.png',
                 'images/certifications/Dra Natalia Neira/Asset 18.png',
                 'images/certifications/Dra Natalia Neira/Asset 19.png',
                 'images/certifications/Dra Natalia Neira/Asset 20.png',
                 'images/certifications/Dra Natalia Neira/Asset 21.png',
                 'images/certifications/Dra Natalia Neira/Asset 22.png',
                 'images/certifications/Dra Natalia Neira/Asset 23.png',
                 'images/certifications/Dra Natalia Neira/Asset 24.png',
                 'images/certifications/Dra Natalia Neira/Asset 25.png',
                 'images/certifications/Dra Natalia Neira/Asset 26.png',
                 'images/certifications/Dra Natalia Neira/Asset 27.png',
              ]
            ],
            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Junior Pastor Linárez Veloz',
                'imagenLong'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'imagenLittle'=> 'images/brand/directiva/iconosStaff_dr-junior-linarez.jpg',
                'cargo'=>'Director de Franquicia',
                'correo'=>'',
                'descripcion'=> 'Próximamente',
                'descripcionPage'=>'Próximamente',
                'educacion'=>'Próximamente',
              'certificados'=>[
                  'images/certifications/Dr Junior Linarez/Asset 28.png',
                  'images/certifications/Dr Junior Linarez/Asset 29.png',
                  'images/certifications/Dr Junior Linarez/Asset 30.png',
                  'images/certifications/Dr Junior Linarez/Asset 31.png',
                  'images/certifications/Dr Junior Linarez/Asset 32.png',
                  'images/certifications/Dr Junior Linarez/Asset 33.png',
              ]
            ],
        ];
        foreach($directiva as $item){
            if($item['nroAfilia'] == $id){
                $encontrado = $item;
            }
        }

        return view('directivauno', compact('encontrado'));
    }

    public function asesoriaonline(){
        return view('asesoriaonline');
    }

    public function proximamente(){
        return view('proximamente');
    }

    public function sedenaco(){

        $doctores = [
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. Víctor Pimentel',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Victor_Pimentel_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Victor_Pimentel.png',
                'especialidades'=> 'Neurocirujano Especialista en Cirugías de Columna Vertebral',
                'descripcion'=> 'Es profesional en el Centro Médico Quirúrgico Docente S&F Dominicana, y destaca por tener más de 10 años de experiencia.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD). Título: Doctor en Medicina Distinción: MAGNA CUM LAUDE, 1998-2004.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras (HDUDDC) Título: Posgrado en Neurocirugía, 2006-2012.</p>
               <p class="mb-2 text-justify"> Rotación Internacional. Departamento de Neurocirugía. Centro Médico Río Piedras, San Juan Recinto de Ciencias Médicas, Universidad de Puerto Rico, 2012.</p>
              <p class="mb-2 text-justify">Programa Avanzado de Perfeccionamiento del idioma Inglés. Professional Training System. Pearson Education, 2010.</p>',
              'descripcionPage'=>'Se graduó en el 2004 en la UASD como Doctor en Medicina, realizó su Posgrado en Neurocirugía en el Hospital Docente
              Universitario Dr. Darío Contreras, desde entonces ha tenido una amplia y prestigiosa trayectoria laboral en múltiples centros de salud,
              trabajando como Neurocirujano en lugares como el Hospital General de la Plaza de la salud, la Clínica Abreu y muchísimos más.',
              'certificados'=>[
                  'images/certifications/Dr pimentel/Asset 2.png',
                  'images/certifications/Dr pimentel/Asset 3.png',
                  'images/certifications/Dr pimentel/Asset 4.png',
                  'images/certifications/Dr pimentel/Asset 5.png',
                  'images/certifications/Dr pimentel/Asset 6.png',
                  'images/certifications/Dr pimentel/Asset 7.png'
              ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Dr. Gerson Cuevas',
                'especialidad'=> 'Traumatología',
                'imagenSlider'=> 'images/brand/carousel/Gerson_Cuevas.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Gerson_Cuevas.png',
                'especialidades'=> 'Ortopeda-Traumatologo Especialista en Columna',
                'descripcion'=> 'Es el parte de nuestro Staff Médico S&F, cuenta con una carrera de 10 años como profesional de la salud.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD) Sto. Dgo. Título: “Doctor en Medicina”, 2006.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras, Universidad Autónoma de Santo Domingo (UASD) Sto.Dgo. República Dominicana.
                  Título: Especialista en “Ortopedia y Traumatología”, 2012.</p>
               <p class="mb-2 text-justify"> Fellowship “Patología de Columna Vertebral” Fundación Hospital Ortopédico Infantil. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">  Fellowship en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">Fellow Research en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>',
              'descripcionPage'=>'Realizó sus estudios en la UASD graduándose como Doctor en Medicina en el 2006, luego entre el 2008 y
              2012 se especializó en Ortopedia y Traumatología en el Hospital Docente Universitario Dr. Darío Contreras.
              Con el transcurso de los años logró un Fellowship en Patología de Columna Vertebral en Venezuela
              finalizado en el 2017, sus estudios están reforzados con una experiencia laboral resaltable, trabajando en
              lugares como el Centro Médico Dominico Cubano, la Clínica Cruz Jiminian, Centro Médico Hispano, entre
              otros',
              'certificados'=>[
                'images/certifications/Dr Gerson Cuevas/Asset 48.png',
                'images/certifications/Dr Gerson Cuevas/Asset 49.png',
                'images/certifications/Dr Gerson Cuevas/Asset 50.png',
                'images/certifications/Dr Gerson Cuevas/Asset 51.png',
                'images/certifications/Dr Gerson Cuevas/Asset 52.png',
                'images/certifications/Dr Gerson Cuevas/Asset 53.png',
                'images/certifications/Dr Gerson Cuevas/Asset 54.png'
            ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dra. Jiset Santoni',
                'especialidad'=> 'Cirugía Maxilofacial',
                'imagenSlider'=> 'images/brand/carousel/Dra_Santoni_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Dra_Santoni.png',
                'especialidades'=> 'Especialista en Cirugía Maxilofacial',
                'descripcion'=> 'Con una gran trayectoria académica y 14 años de experiencia en el área de salud, es parte de nuestro Staff Médico S&F',
                'turno'=> 'tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..</p>
                <p class="mb-2 text-justify"> Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.</p>
               <p class="mb-2 text-justify"> Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.</p>
              <p class="mb-2 text-justify">  Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.</p>
              <p class="mb-2 text-justify">Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017</p>
              <p class="mb-2 text-justify">Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010</p>
              <p class="mb-2 text-justify">Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007</p>',
                'descripcionPage'=>'Adquirió su título de Doctora En Medicina en la UCSD en el 2005 y de Cirugía General en el 2007,
                posee un título Magíster de Cirujano Cérvico BucoMaxilofacial y un Fellow en Rinología y Cirugía
                Plástica Facial, tiene un Diplomado en Pedagogía y una Maestría en Gerencia Moderna en Salud. Ha
                realizado cursos nacionales e internaciones que van desde la Cirugía Maxilofacial hasta la Rinología. Su
                experiencia laboral ha sido adquirida gracias a sus trabajos en el Centro Médico UCE, Hospital Félix
                María Goico y otros centros de salud importantes en República Dominicana.',
                'certificados'=>[
                    'images/certifications/Dra Jiset Santoni/Asset 41.png',
                    'images/certifications/Dra Jiset Santoni/Asset 42.png',
                    'images/certifications/Dra Jiset Santoni/Asset 43.png',
                    'images/certifications/Dra Jiset Santoni/Asset 44.png',
                    'images/certifications/Dra Jiset Santoni/Asset 45.png',
                    'images/certifications/Dra Jiset Santoni/Asset 46.png',
                    'images/certifications/Dra Jiset Santoni/Asset 47.png',
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Luis de la Cruz Hernández',
                'especialidad'=> 'Cirugía cardiovascular',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano Cardiovascular',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                    'images/certifications/Dr Luis De la Cruz/Asset 55.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 56.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 57.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 58.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 59.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 61.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 62.png',
                ],
                'clase' =>'odd'

            ],
            // [
            //     'nroAfilia'=> 6,
            //     'nombre'=> 'Dr. Angel Alejandro Mora',
            //     'especialidad'=> 'Cirugía plástica',
            //     'imagenSlider'=> 'images/brand/carousel/DR.Mora_384x410.png',
            //     'imagenPagDoct'=> 'images/brand/fotos-doctores/DR.Mora_110x110.png',
            //     'especialidades'=> 'Especialista en Cirugía Plástica y Reconstructiva. Cirugía Hepática y Biliar',
            //     'turno'=> 'Mañana',
            //     'descripcion'=> 'Próximamante',
            //     'btnHorario'=> 'proximamente',
            //     'educacion'=>'Próximamante',
            //     'descripcionPage'=>'Próximamante',
            //     'certificados'=>[
            //         'images/certifications/Dr Angel Mora/Asset 62.png',
            //         'images/certifications/Dr Angel Mora/Asset 63.png',
            //         'images/certifications/Dr Angel Mora/Asset 64.png',
            //         'images/certifications/Dr Angel Mora/Asset 65.png',
            //         'images/certifications/Dr Angel Mora/Asset 66.png',
            //         'images/certifications/Dr Angel Mora/Asset 67.png',
            //         'images/certifications/Dr Angel Mora/Asset 68.png',
            //         'images/certifications/Dr Angel Mora/Asset 69.png',
            //     ],
            //     'clase' =>'jeft'

            // ],
            [
                'nroAfilia'=> 7,
                'nombre'=> 'Dr. Carlos Bautista Jimenes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano especialista en cirugía de columna vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],

        ];

        return view('sedenaco', compact('doctores'));
    }

    public function sedevergel(){
        return view('sedevergel');
    }

    public function doctormiembro($id){
        $doctores = [
            [
                'nroAfilia'=> 1,
                'nombre'=> 'Dr. Víctor Pimentel',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Victor_Pimentel_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Victor_Pimentel.png',
                'especialidades'=> 'Neurocirujano Especialista en Cirugías de Columna Vertebral',
                'descripcion'=> 'Es profesional en el Centro Médico Quirúrgico Docente S&F Dominicana, y destaca por tener más de 10 años de experiencia.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD). Título: Doctor en Medicina Distinción: MAGNA CUM LAUDE, 1998-2004.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras (HDUDDC) Título: Posgrado en Neurocirugía, 2006-2012.</p>
               <p class="mb-2 text-justify"> Rotación Internacional. Departamento de Neurocirugía. Centro Médico Río Piedras, San Juan Recinto de Ciencias Médicas, Universidad de Puerto Rico, 2012.</p>
              <p class="mb-2 text-justify">Programa Avanzado de Perfeccionamiento del idioma Inglés. Professional Training System. Pearson Education, 2010.</p>',
              'descripcionPage'=>'Se graduó en el 2004 en la UASD como Doctor en Medicina, realizó su Posgrado en Neurocirugía en el Hospital Docente
              Universitario Dr. Darío Contreras, desde entonces ha tenido una amplia y prestigiosa trayectoria laboral en múltiples centros de salud,
              trabajando como Neurocirujano en lugares como el Hospital General de la Plaza de la salud, la Clínica Abreu y muchísimos más.',
              'certificados'=>[
                  'images/certifications/Dr pimentel/Asset 2.png',
                  'images/certifications/Dr pimentel/Asset 3.png',
                  'images/certifications/Dr pimentel/Asset 4.png',
                  'images/certifications/Dr pimentel/Asset 5.png',
                  'images/certifications/Dr pimentel/Asset 6.png',
                  'images/certifications/Dr pimentel/Asset 7.png'
              ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 2,
                'nombre'=> 'Dr. Gerson Cuevas',
                'especialidad'=> 'Traumatología',
                'imagenSlider'=> 'images/brand/carousel/Gerson_Cuevas.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Gerson_Cuevas.png',
                'especialidades'=> 'Ortopeda-Traumatologo Especialista en Columna',
                'descripcion'=> 'Es el parte de nuestro Staff Médico S&F, cuenta con una carrera de 10 años como profesional de la salud.',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'<p class="mb-2 text-justify"> Universidad Autónoma de Santo Domingo (UASD) Sto. Dgo. Título: “Doctor en Medicina”, 2006.</p>
                <p class="mb-2 text-justify"> Hospital Docente Universitario Dr. Darío Contreras, Universidad Autónoma de Santo Domingo (UASD) Sto.Dgo. República Dominicana.
                  Título: Especialista en “Ortopedia y Traumatología”, 2012.</p>
               <p class="mb-2 text-justify"> Fellowship “Patología de Columna Vertebral” Fundación Hospital Ortopédico Infantil. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">  Fellowship en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>
              <p class="mb-2 text-justify">Fellow Research en Cirugía de Columna Vertebral. Centro de patología de columna vertebral Urológico San Román. Caracas - Venezuela, 2016 - 2017.</p>',
              'descripcionPage'=>'Realizó sus estudios en la UASD graduándose como Doctor en Medicina en el 2006, luego entre el 2008 y
              2012 se especializó en Ortopedia y Traumatología en el Hospital Docente Universitario Dr. Darío Contreras.
              Con el transcurso de los años logró un Fellowship en Patología de Columna Vertebral en Venezuela
              finalizado en el 2017, sus estudios están reforzados con una experiencia laboral resaltable, trabajando en
              lugares como el Centro Médico Dominico Cubano, la Clínica Cruz Jiminian, Centro Médico Hispano, entre
              otros',
              'certificados'=>[
                'images/certifications/Dr Gerson Cuevas/Asset 48.png',
                'images/certifications/Dr Gerson Cuevas/Asset 49.png',
                'images/certifications/Dr Gerson Cuevas/Asset 50.png',
                'images/certifications/Dr Gerson Cuevas/Asset 51.png',
                'images/certifications/Dr Gerson Cuevas/Asset 52.png',
                'images/certifications/Dr Gerson Cuevas/Asset 53.png',
                'images/certifications/Dr Gerson Cuevas/Asset 54.png'
            ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 3,
                'nombre'=> 'Dra. Jiset Santoni',
                'especialidad'=> 'Cirugía Maxilofacial',
                'imagenSlider'=> 'images/brand/carousel/Dra_Santoni_2.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Dra_Santoni.png',
                'especialidades'=> 'Especialista en Cirugía Maxilofacial',
                'descripcion'=> 'Con una gran trayectoria académica y 14 años de experiencia en el área de salud, es parte de nuestro Staff Médico S&F',
                'turno'=> 'tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..
                        Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.
                        Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.
                        Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.
                    Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017
                    Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010
                    Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007',
            //     'educacion'=>'<p class="mb-2 text-justify">Universidad Tecnológica de Santiago (UTESA) Título: “Doctor en Medicina”, 2000-2005..</p>
            //     <p class="mb-2 text-justify"> Universidad Central del Este (UCE) Primer año aprobado en “Cirugía General”, 2006-2007.</p>
            //    <p class="mb-2 text-justify"> Fellow “Rinología y Cirugía Plástica Facial” Sociedad Mexicana de Rinología y Cirugía Facial A.C./ Hospital Ángeles las Lomas, Estado de México, Marzo-Octubre, 2011.</p>
            //   <p class="mb-2 text-justify">  Diplomado en Pedagogía Universitaria, “Ponticia Universidad Católica Madre y Maestra PUCMM”, 2013.</p>
            //   <p class="mb-2 text-justify">Maestría en Gerencia Moderna en Salud, "Universidad Católica de Santo Domingo UCSD", 2015-2017</p>
            //   <p class="mb-2 text-justify">Título Magíster “Cirujano Cérvico BucoMaxilofacial” Ponticia Universidad Católica Madre y Maestra (PUCMM), 2007-2010</p>
            //   <p class="mb-2 text-justify">Primer año aprobado en “Cirugía General” Universidad Central del Este (UCE), 2006-2007</p>',
                'descripcionPage'=>'Adquirió su título de Doctora En Medicina en la UCSD en el 2005 y de Cirugía General en el 2007,
                posee un título Magíster de Cirujano Cérvico BucoMaxilofacial y un Fellow en Rinología y Cirugía
                Plástica Facial, tiene un Diplomado en Pedagogía y una Maestría en Gerencia Moderna en Salud. Ha
                realizado cursos nacionales e internaciones que van desde la Cirugía Maxilofacial hasta la Rinología. Su
                experiencia laboral ha sido adquirida gracias a sus trabajos en el Centro Médico UCE, Hospital Félix
                María Goico y otros centros de salud importantes en República Dominicana.',
                'certificados'=>[
                    'images/certifications/Dra Jiset Santoni/Asset 41.png',
                    'images/certifications/Dra Jiset Santoni/Asset 42.png',
                    'images/certifications/Dra Jiset Santoni/Asset 43.png',
                    'images/certifications/Dra Jiset Santoni/Asset 44.png',
                    'images/certifications/Dra Jiset Santoni/Asset 45.png',
                    'images/certifications/Dra Jiset Santoni/Asset 46.png',
                    'images/certifications/Dra Jiset Santoni/Asset 47.png',
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 5,
                'nombre'=> 'Dr. Luis de la Cruz Hernández',
                'especialidad'=> 'Cirugía cardiovascular',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano Cardiovascular',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Tarde',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                    'images/certifications/Dr Luis De la Cruz/Asset 55.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 56.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 57.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 58.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 59.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 61.png',
                    'images/certifications/Dr Luis De la Cruz/Asset 62.png',
                ],
                'clase' =>'odd'

            ],
            // [
            //     'nroAfilia'=> 6,
            //     'nombre'=> 'Dr. Angel Alejandro Mora',
            //     'especialidad'=> 'Cirugía plástica',
            //     'imagenSlider'=> 'images/brand/carousel/DR.Mora_384x410.png',
            //     'imagenPagDoct'=> 'images/brand/fotos-doctores/DR.Mora_110x110.png',
            //     'especialidades'=> 'Especialista en Cirugía Plástica y Reconstructiva. Cirugía Hepática y Biliar',
            //     'turno'=> 'Mañana',
            //     'descripcion'=> 'Próximamante',
            //     'btnHorario'=> 'proximamente',
            //     'educacion'=>'Próximamante',
            //     'descripcionPage'=>'Próximamante',
            //     'certificados'=>[
            //         'images/certifications/Dr Angel Mora/Asset 62.png',
            //         'images/certifications/Dr Angel Mora/Asset 63.png',
            //         'images/certifications/Dr Angel Mora/Asset 64.png',
            //         'images/certifications/Dr Angel Mora/Asset 65.png',
            //         'images/certifications/Dr Angel Mora/Asset 66.png',
            //         'images/certifications/Dr Angel Mora/Asset 67.png',
            //         'images/certifications/Dr Angel Mora/Asset 68.png',
            //         'images/certifications/Dr Angel Mora/Asset 69.png',
            //     ],
            //     'clase' =>'jeft'

            // ],
            [
                'nroAfilia'=> 7,
                'nombre'=> 'Dr. Carlos Bautista Jimenes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano especialista en cirugía de columna vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],

            [
                'nroAfilia'=> 8,
                'nombre'=> 'Dra. Erika de los Ángeles Reyes',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

            [
                'nroAfilia'=> 9,
                'nombre'=> 'Dr. Mario Fulcar',
                'especialidad'=> 'Cirugía oncólogica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Cirujano oncólogo',
                'descripcion'=> 'Próximamente',
                'turno'=> 'Mañana',
                'btnHorario'=> 'proximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 10,
                'nombre'=> 'Dr. Emil Manzur',
                'especialidad'=> 'Neurología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neumonólogo, Intensivista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 11,
                'nombre'=> 'Dr. Alex Quiñones',
                'especialidad'=> 'Cuidados Critícos',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Emergencia, Cuidados Critícos',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 12,
                'nombre'=> 'Dr. Julio Nicolas Valerio',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Medico internista, Intensivista y cardiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Próximamente',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 13,
                'nombre'=> 'Dra. Lucila Polanco',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 14,
                'nombre'=> 'Dra. Omaira Reyes',
                'especialidad'=> 'Oncología',
                'imagenSlider'=> 'images/brand/carousel/Omaira_Reyes.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Omaira_Reyes.png',
                'especialidades'=> 'Oncólogo, Médico internista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 15,
                'nombre'=> 'Dr. Eduardo Moore',
                'especialidad'=> 'Médico internista',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Médico internista, intensivista, nutricionista',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 16,
                'nombre'=> 'Dra. Kelly Camargo',
                'especialidad'=> 'Obstetrica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Obstetricia, Ginecología',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 17,
                'nombre'=> 'Dr. Juan José Manzur',
                'especialidad'=> 'Gastrología',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Pediatra, Gastroenterologo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 18,
                'nombre'=> 'Dr. Antonio Papaterra',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctor.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctor.png',
                'especialidades'=> 'Neurocirujano',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],
            [
                'nroAfilia'=> 19,
                'nombre'=> 'Dr. Freddy Antonio Flores',
                'especialidad'=> 'Neurocirugía',
                'imagenSlider'=> 'images/brand/carousel/Freddy_Flores.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Freddy_Flores.png',
                'especialidades'=> 'Neurocirujano, Cirujano de Columna Vertebral',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'
            ],
            [
                'nroAfilia'=> 20,
                'nombre'=> 'Dra. Isy Cedeño',
                'especialidad'=> 'Cirugía general',
                'imagenSlider'=> 'images/brand/carousel/Isy_Cedeno.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Isy_Cedeño.png',
                'especialidades'=> 'Cirujano general',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Mañana',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'


            ],
            [
                'nroAfilia'=> 21,
                'nombre'=> 'Dra. Ivelisse Bello',
                'especialidad'=> 'Cirugía plástica',
                'imagenSlider'=> 'images/brand/carousel/Silueta_Doctora.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/Silueta_Doctora.png',
                'especialidades'=> 'Cirujano Plástico',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'jeft'

            ],
            [
                'nroAfilia'=> 22,
                'nombre'=> 'Dr. Sócrates Jaquez',
                'especialidad'=> 'Epidemiología',
                'imagenSlider'=> 'images/brand/carousel/Socrates_Jaquez.png',
                'imagenPagDoct'=> 'images/brand/fotos-doctores/110x110_Socrates_Jaquez.png',
                'especialidades'=> 'Epidemiólogo',
                'descripcion'=> 'Próximamente',
                'btnHorario'=> 'proximamente',
                'turno'=> 'Tarde',
                'educacion'=>'Próximamente',
                'descripcionPage'=>'Próximamente',
                'certificados'=>[
                ],
                'clase' =>'odd'

            ],

        ];


        foreach($doctores as $item){
            if($item['nroAfilia'] == $id){
                $encontrado = $item;
            }
        }

        return view('doctormiembro', compact('encontrado'));
    }

}
