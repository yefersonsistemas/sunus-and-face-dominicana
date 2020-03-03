@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Sobre S&F</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">

    <section class=" syf context-dark text-lg-left">
      <div class="container section-34 section-md-top-110 section-md-bottom-41">
        <h1>Sobre S&F</h1>
        <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
            <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
            <li class="list-inline-item active">Sobre S&F</li>
        </ul>
      </div>
    </section>

    <!-- a few words about us-->
    <section class="section-98 section-sm-110 text-left">
      <div class="container">
        <div class="row justify-content-sm-center row-40">
          <div class="col-sm-10 col-lg-8">
            <h3 class="efect">ALGUNAS PALABRAS SOBRE NOSOTROS </h3>
            <!-- <hr class="divider divider-lg bg-java hr-left-0 hr-sm-left-2"> -->
            <div class="offset-top-41 offset-lg-top-60 text-justify">
              <p>En el Centro Médico Quirúrgico Docente S&F, nuestro equipo de atención médica tiene un eslogan: Cuidar
                la vida. Simboliza la variedad de capacidades y servicios que le brindamos a cada uno de nuestros
                pacientes. En esencia, representa un espíritu y una pasión por brindar la mejor atención médica, en
                asociación con usted con un enfoque en mejorar su salud y su vida.</p>

              <p>En la práctica, se ha convertido en nuestro pilar con un enfoque bien coordinado y sistemático que une
                a médicos, enfermeras y personal de apoyo en la búsqueda del bienestar. Nuestra misión es ser
                reconocidos como el Centro Médico Quirúrgico Docente más importante de República Dominicana, no solo por
                sus novedosas y modernas instalaciones, sino también por los equipos de alta tecnología, la calidad del
                staff médico así como por brindar servicios médicos de alta calidad, rentables y de vanguardia de una
                manera única y personalizada generando “la experiencia Sinus&Face”.</p>
              </p>
            </div>
          </div>
          <div class="col-sm-10 col-lg-4">
            <h6>El corazón de nuestro Centro Médico Quirúrgico Docente</h6>
            <hr class="text-subline">
            {{-- @foreach ($directiva as $director) --}}
            <div class="offset-top-30">
              <div
                class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-column flex-sm-row unit-spacing-sm align-items-center">
                <div class="unit-left mb-4"><img src="images/brand/fotos-doctores/Pelaez_3.jpg" alt="Foto de perfil del doctor pelaze" width="110"
                    height="110" />
                </div>
                <div class="unit-body">
                  <h5 class="font-weight-bold text-primary">{{$director['nombre']}}</h5>
                  <p class="font-italic offset-top-0">{{$director['cargo']}}</p>
                  <div class="p unit unit-spacing-xxs flex-row"></div>
                </div>
              </div>
              <p class="text-justify">{{$director['descripcion']}}</p>
              <a class="btn btn-java btn-ellipse mt-4" href="{{ route('directivauno',$director['nroAfilia'] ) }}">Saber Más</a>
            </div>
            {{-- @endforeach --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Our Achievements-->
    <section class="text-md-left bg-default-liac">
      <div class="container-wide">
        <div class="row justify-content-sm-center">
          <div
            class="col-xl-5 col-xxl-4 section-98 section-md-122 context-md-dark bg-image-md-fullwidth-1 bg-image-md-fullwidth-1-left d-none d-xl-block">
          </div>
          <div class="col-md-10 col-lg-12 col-xl-7 col-xxl-8 section-85">
            <div class="inset-lg-left-60 text-center">
              <h3 class="efect">NUESTRA DIRECTIVA</h3>
              <!-- <hr class="divider divider-lg bg-java hr-md-left-2"> -->
              <div class="offset-top-41 offset-lg-top-60">
                <div class="row">
                  <div class="col-lg-12 col-xxl-9">
                    <div class="row row-30 row-lg-50 d-flex flex-row justify-content-center">
                    @foreach ($directiva as $director)
                      <div class="col-lg-6 col-md-6">
                        <!-- <a href="directiva/{{  $director['nroAfilia']}}" class="text-decoration-none"> -->
                        <!-- Icon Box Type 2-->
                          <div class="unit unit-sm flex-md-row unit-spacing-sm text-left align-items-center">
                            <div class="unit-left"><span
                                class="icon icon icon-sm icon-circle text-boston-blue directive icon-default mdi mdi-trophy-variant" style="background: url(../{{  $director['imagenLittle']}});"></span>
                            </div>
                            <div class="unit-body">
                              <h6 class="text-primary font-weight-bold" style="text-transform:none;">{{  $director['nombre']}}</h6>
                              <p class="font-italic offset-top-0">{{  $director['cargo']}}</p>
                              <p></p>
                            </div>
                          </div>
                        <!-- </a> -->
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our team-->
    <section class=" mb-5">
      <div class="container">
        <div class="">
          <div class="row justify-content-sm-center row-40">
            <div class="mt-5 col-md-6"><a class="btn btn-ellipse btn-java btn-block staff p-3" href="{{ route('doctores') }}"
                style="font-size:26px;">Ver Staff de Doctores</a></div>
          </div>
        </div>
    </section>
</body>

</html>
