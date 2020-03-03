@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Dr. José Miguel López Peláez</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">
    <!-- Breadcrumbs-->

{{-- @foreach ($encontrado) { --}}
    {{-- @if ($encontrado['nroAfilia'] == $nroAfilia) --}}

    <section class="syf context-dark text-lg-left breadcrumb-inset-left">
      <div class="container section-34 section-md-top-110 section-md-bottom-41">
        <h1 style="font-size:53px;">{{ $encontrado['nombre']}}</h1>
        <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
            <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
          <li class="list-inline-item"><a class="text-java" href="{{ route('sobre') }}">Sobre S&f</a></li>
          <li class="list-inline-item active">{{ $encontrado['nombre']}}</li>
        </ul>
      </div>
    </section>

    <!-- team member section-->
    <section class="section-98 section-sm-top-34 section-sm-bottom-110">
      <div class="container">
        <div class="row row-50 row-xl-60 justify-content-sm-center">
          <div class="col-sm-10 col-lg-4">
            <!-- Member block type 5-->
            <div class="member-block-type-5 inset-lg-right-20 parallaxperfil"><img class="center-block"
                src="{{ $encontrado['imagenLong']}}" alt="Foto de perfil del doctor" width="320" height="320" />
              <div class="member-block-body"><a class="btn btn-ellipse btn-java" data-toggle="modal"
                  data-target="#makeAnAppointmentModal"><strong class="mr-1">¡GRAN INAUGURACIÓN!</strong><br>Marzo 2020</a>
                <address class="contact-info offset-top-20 offset-sm-top-24">
                  <ul class="list-unstyled p">
                    <li><span class="icon icon-xxxs text-middle text-primary mdi mdi-email-open"></span><a
                        class="text-middle d-inline-block"
                        href="mailto:dir.medicobranch@syfdominicana.com" rel="nofollow">{{ $encontrado['correo']}}</a></li>
                  </ul>
                </address>
                <!-- <div class="offset-top-24">
                  <ul class="list-inline list-inline-xs">
                    <li class="list-inline-item"><a class="icon icon-xxs icon-circle icon-gray-light fa-facebook"
                        href="#"></a></li>
                    <li class="list-inline-item"><a class="icon icon-xxs icon-circle icon-gray-light fa-twitter"
                        href="#"></a></li>
                    <li class="list-inline-item"><a class="icon icon-xxs icon-circle icon-gray-light fa-google-plus"
                        href="#"></a></li>
                    <li class="list-inline-item"><a class="icon icon-xxs icon-circle icon-gray-light fa-rss"
                        href="#"></a></li>
                  </ul>
                </div> -->
              </div>
            </div>

          </div>
          <div class="col-sm-10 col-lg-8 text-lg-left">
            <div class="row row-30">
              <div class="col-md-5">
                <div class="h6">Cargo</div>
                <hr class="text-subline">
                <h5 class="font-weight-bold text-turquesa">{{ $encontrado['cargo']}}</h5>
              </div>
              <div class="col-md-7">
                <div class="h6">Educación</div>
                <hr class="text-subline">
                {{ html_entity_decode(strip_tags($encontrado['educacion']))}}
              </div>
            </div>
            <div class="offset-top-41 offset-lg-top-66 text-left">
              <h6>EL CORAZÓN DE S&F</h6>
              <hr class="text-subline">
              {{ html_entity_decode(strip_tags($encontrado['descripcionPage']))}}
            </div>
            <div class="offset-top-34 text-md-left inset-lg-right-20">
              <h6 class="text-left">CERTIFICACIONES</h6>
              <hr class="text-subline">
              <div class="row justify-content-sm-center justify-content-md-center offset-top-24 row-20">
                @foreach($encontrado['certificados'] as $item)
                <div class="col-md-2 col-4">
                    <a class="thumbnail-classic" data-lightgallery="item" href="{{$item}}">
                      <figure><img src="{{$item}}" alt="Certificado del doctor" width="100"
                          height="138" />
                      </figure>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- @endif --}}

{{-- @endforeach --}}
</body>

</html>
