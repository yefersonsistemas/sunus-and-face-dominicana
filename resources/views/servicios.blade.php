@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Servicios</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">

    <!-- Breadcrumbs-->
    <section class="servicios context-dark text-lg-left">
      <div class="container section-34 section-md-top-110 section-md-bottom-41">
        <h1>Servicios</h1>
        <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
          <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
          <li class="list-inline-item active">Servicios</li>
        </ul>
      </div>
    </section>

    <!--servicios-->
    <section class="section section-98 section-sm-top-85 section-sm-bottom-200 bg-default">
      <div class="container">
        <div class="row row-50">
          <div class="col-lg-3">
            <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-2">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-2-1"
                    data-toggle="tab">Consultas Médicas</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-2"
                    data-toggle="tab">Procedimientos Ambulatorios</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-3"
                    data-toggle="tab">Procedimientos quirúrgicos</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-4"
                    data-toggle="tab">Hospitalización</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-5" data-toggle="tab">Terapia
                    intensiva</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-6" data-toggle="tab">Procedimiento Odontológico</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-7"
                    data-toggle="tab">Emergencia</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-8"
                    data-toggle="tab">Ambulancia</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="tabs-2-1">
                <h3 class="efect">Consultas Médicas</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Consultas_Medicas_870x440.jpg" alt="Icono de servicio de consultas medicas"
                    width="870" height="440" />
                  <div class="offset-top-30 text-justify">
                    <p>En S&F contarás con nuestros servicios de consultas clínicas en más de 36 campos entre
                      especialidades y <br>subespecialidades, todas de la manos de los mejores especialistas de República
                      Dominicana.</p>
                  </div>
                  <!-- collapse de especialidades -->
                  <!-- <div class="col-md-12">
                    <select class="custom-select custom-select-lg mb-3" id="speciality">
                      <option value="" selected>Selecciona una Especialidad</option>
                      <option value="otorrinolaringologia" id="headingOtorrinolaringologia" data-toggle="collapse"
                        data-target="#collapseOtorrinolaringologia" aria-expanded="true"
                        aria-controls="collapseOtorrinolaringologia">Otorrinolaringología</option>
                      <option value="cirugiaEstetica" id="headingCirugiaEstetica" data-toggle="collapse"
                        data-target="#collapseCirugiaEstetica" aria-expanded="true"
                        aria-controls="collapseCirugiaEstetica">Cirugia estética facial</option>
                    </select>
                  </div> -->

                </div>
              </div>
              <div class="tab-pane fade" id="tabs-2-2">
                <h3 class="efect">Procedimientos Ambulatorios</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Procedimientos_Ambulatorios_870x440.jpg"
                    alt="Icono de servicio de procedimientos ambulatorios" width="870" height="440" />
                  <div class="offset-top-30 text-justify">
                    <p>Cómodas instalaciones con lo ultimo en tecnologia, especialmente pensadas para la
                      realización de procedimientos ambulatorios, como Estudios Endoscópicos, Digestivos, Urológicos,
                      Ginecológicos y Broncopulmonares; Cirugías Ambulatorias, Toxina Botulínica, Peeling, Nutrición
                      Facial, entre otros. Orientados a entregar una atención de calidad a nuestros pacientes.</p>
                  </div>
                  <!-- collapse de especialidades -->
                  <!-- <div class="col-md-12">
                    <select class="custom-select custom-select-lg mb-3" id="speciality">
                      <option value="" selected>Selecciona una Especialidad</option>
                      <option value="otorrinolaringologia" id="headingOtorrinolaringologia" data-toggle="collapse"
                        data-target="#collapseOtorrinolaringologia" aria-expanded="true"
                        aria-controls="collapseOtorrinolaringologia">Otorrinolaringología</option>
                      <option value="cirugiaEstetica" id="headingCirugiaEstetica" data-toggle="collapse"
                        data-target="#collapseCirugiaEstetica" aria-expanded="true"
                        aria-controls="collapseCirugiaEstetica">Cirugia estética facial</option>
                    </select>
                  </div> -->

                </div>
              </div>
              <div class="tab-pane fade" id="tabs-2-3">
                <h3 class="efect">Procedimientos quirúrgicos</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Procedimientos_Quirurgicos_870x440.jpg"
                    alt="Icono de servicio de procedimientos quirurgicos" width="870" height="440" />
                  <div class="offset-top-30 text-justify">
                    <p>Nuestra meta es ayudarle a alcanzar su mejor nivel de salud, con un procedimiento rutinario o una cirugía avanzada.
                      En S&F, nuestro staff trabaja de la mano con usted para planear una cirugía diseñada de acuerdo a sus necesidades
                      individuales ayudandole a tener una recuperación pronta, segura y positiva.
                    </p>
                  </div>

                  <!-- collapse de especialidades -->
                  <!-- <div class="col-md-12">
                    <select class="custom-select custom-select-lg mb-3" id="speciality">
                      <option value="" selected>Selecciona una Especialidad</option>
                      <option value="otorrinolaringologia" id="headingOtorrinolaringologia" data-toggle="collapse"
                        data-target="#collapseOtorrinolaringologia" aria-expanded="true"
                        aria-controls="collapseOtorrinolaringologia">Otorrinolaringología</option>
                      <option value="cirugiaEstetica" id="headingCirugiaEstetica" data-toggle="collapse"
                        data-target="#collapseCirugiaEstetica" aria-expanded="true"
                        aria-controls="collapseCirugiaEstetica">Cirugia estética facial</option>
                    </select>

                  </div> -->

                </div>

              </div>

              <div class="tab-pane fade" id="tabs-2-4">
                <h3 class="efect">Hospitalización</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Hospitalizacion_87x440.jpg" alt="Icono de servicio de hospitalizacion"
                    width="870" height="440" />
                  <div class="offset-top-30 text-justify">
                    <div class="more">
                      <p> El servicio de hospitalización contempla estadía 24 horas para la recuperación de su salud,
                      al proporcionar un espacio de atención médica continua los 7 días de la semana.
                      Nuestro servicio ofrece un tratamiento estructurado y múltiple con la integración de distintas actividades
                      terapéuticas, trabajo en equipo de varios especialistas en pacientes con patologías que requieren cuidados
                      diarios y directos. La calidad y eficacia de la hospitalización está fundamentada en la atención
                      continua del paciente por el equipo médico y paramédico.</p>
                      <p> El tiempo de permanencia requerido por cada paciente varía y dependerá del estado clínico.
                      Durante la hospitalización se realizarán estudios ambulatorios, y procedimientos diagnósticos o terapéuticos
                      que requieren de un cuidado posterior.
                      Equipos de Médicos especialistas en las diferentes ramas de la medicina, están al cuidado de cada
                      uno de los pacientes que requieren de sus servicios. Además de la atención del Médico residente de
                      planta, durante su estancia en esta área.
                      Contamos con un plantel de enfermería y administrativo entrenado para brindarle, tanto al
                      profesional como al paciente, una excelente y rápida atención.
                      La hospitalización funciona en la planta baja y piso 1. El horario de funcionamiento es permanente
                      de lunes a domingo.</p>
                    </div>
                    <!-- <ul class="list-marked list">
                      <li>Common Illnesses</li>
                      <li>Dressings & First Aid</li>
                      <li>Blood Tests and Injections</li>
                      <li>Contraception</li>
                      <li>Cervical Screening</li>
                      <li>Travel Advice & Vaccinations</li>
                      <li>Stress Management & Counselling</li>
                      <li>Advice on Diabetes & Asthma</li>
                      <li>Advice on Alcohol, Smoking & Nutrition</li>
                    </ul> -->
                  </div>
                  <!-- <div class="offset-top-30">
                    <a class="btn btn-ellipse btn-java" data-toggle="modal"
                      data-target="#makeAnAppointmentModal"><strong class="mr-1">¡GRAN INAUGURACIÓN!</strong><br>Marzo 2020</a>
                    </div> -->
                </div>
              </div>

              <div class="tab-pane fade" id="tabs-2-5">
                <h3 class="efect">Terapia intensiva</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Terapia_Intensiva_870x440.jpg" alt="Icono de servicio de terappia intensiva"
                    width="870" height="440" />
                  <div class="offset-top-30 text-justify">
                    <p>Contamos con áreas certificadas para el mantenimiento de funciones vitales en pacientes
                      críticamente enfermos o en situación de alto riesgo.</p>
                  </div>


                </div>
              </div>

              <div class="tab-pane fade" id="tabs-2-6">
                <h3 class="efect">Procedimiento Odontológico</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Odontologia_870x440.jpg" alt="Icono de servicio de odontologia" width="870"
                    height="440" />
                  <div class="offset-top-30 text-justify">
                    <p>Ofrecemos un servicio odontológico de calidad, con atención personalizada y espacios de confort pensados especialmente
                      para ti; poniendo a tu disposición los mejores equipos y especialistas comprometidos con tu bienestar.</p>
                  </div>
                  <!-- <div class="offset-top-30",
                    <a class="btn btn-ellipse btn-java" data-toggle="modal"
                      data-target="#makeAnAppointmentModal"><strong class="mr-1">¡GRAN INAUGURACIÓN!</strong><br>Marzo 2020</a>
                    </div> -->
                </div>
              </div>

              <div class="tab-pane fade" id="tabs-2-7">
                <h3 class="efect">Emergencia</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Emergencia_870x440.jpg" alt="Icono de servicio de emergencia" width="870"
                    height="440" />
                  <div class="emergencia text-justify">
                    <p>Proporcionamos un servicio médico de 24 horas al público en general. Nuestras instalaciones
                      cuenta con 5 puestos de atención ambulatoria, dos salas de observación y sala de
                      trauma-shock con un ambiente seguro y confortable para el paciente y sus familiares.</p>
                      <p>Cada paciente estara bajo el cuidado de su médico tratante con contacto permanente. Sera evaluado
                      al momento de su ingreso para llegar al diagnóstico y aplicación del tratamiento de manera eficaz.
                      Una vez finalizado el estudio, se establecerá si requiere ser admitido al
                      área de observación, hospitalización o cirugía o si puede ser atendido de manera ambulatoria.
                      El servcio de Emergencia esta disponible los 7 días de la semana en horario permanente.
                    </p>

                  </div>

                </div>
              </div>

              <div class="tab-pane fade" id="tabs-2-8">
                <h3 class="efect">Ambulancia</h3>
                <!-- <hr class="divider divider-lg hr-left-2 bg-java"> -->
                <div class="offset-top-60"><img src="images/brand/servicios/Ambulancia 870x440.jpg" alt="Icono de servicio de ambulacia" width="870"
                    height="440" />
                  <div class="text-justify">
                    <p>
                    Ofrecemos un servicio totalmente efectivo de ambulancias completamente equipadas cuando la necesites, con atención totalmente personalizada garantizando el bienestar de su salud, asistido por nuestro personal altamente capacitado para atender emergencias. Nos comprometemos a atender en el tiempo oportuno las solicitudes de sus necesidades.
                    </p>

                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
</body>

</html>
