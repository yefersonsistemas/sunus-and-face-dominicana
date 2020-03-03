@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Sedes</title>
    @include('.layouts.navbar')

    <body>

        <!-- Page-->
        <div class="page text-center">

            <!-- Breadcrumbs-->
            <section class="sedes context-dark text-lg-left">
                <div class="container section-34 section-md-top-110 section-md-bottom-41">
                    <h1>Sedes</h1>
                    <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                        <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
                        <li class="list-inline-item active">Sedes</li>
                    </ul>
                </div>
            </section>


            <section class="pt-md-0 pb-md-0 mt-5">
                <div class="container-fluid">
                @foreach ($sedes as $sede)
                    <div class="row justify-content-sm-center justify-content-md-start">
                        <div class="col-sx-12 col-sm-12 col-md-6 section-image-aside section-image-aside-right text-center text-md-left {{  $sede['classOrden2']}}">
                            <div class="">
                                <div class="section-image-aside-body section-md-bottom-66 section-md-top-110 inset-lg-right-93 section-sm-top-50 text-map-naco">
                                    <div class="ico-sede d-flex flex-row align-items-start">
                                        <img src="{{  $sede['icono']}}" alt="Icono de sede sea consultorio o quirofano" class="img-ico" width="100px">
                                        <div class="efect">
                                            <h3 class="mx-0">{{  $sede['lugar']}}</h3>
                                            <h6 class="mx-0">{{  $sede['nombre']}}</h6>
                                        </div>
                                    </div>
                                    <div class="text-justify offset-md-top-60 offset-top-34" style="">
                                        <p>{{  $sede['descripcionLittle']}} </p>
                                    </div>
                                    @if ($sede['tag']=='Próximamente')
                                    <div class="mt-3"><a class="btn btn-ellipse btn-java btn-sede" href="{{ route('sedevergel') }}">Saber Más</a></div>
                                    @else
                                    <div class="mt-3"><a class="btn btn-ellipse btn-java btn-sede" href="{{ route('sedenaco') }}">Saber Más</a></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 p-0 row-naco {{  $sede['classOrden1']}}">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class=" flip-card-front section-image-aside-img" style="background-image: url({{  $sede['imagen']}})">
                                    </div>
                                    <div class="flip-card-back">
                                            <iframe src="{{  $sede['map']}}" width="100%" height="503" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </section>
    </body>

</html>
