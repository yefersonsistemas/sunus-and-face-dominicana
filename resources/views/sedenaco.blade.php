@extends('.layouts.app')
    <title>S&F Clinic | Sucursal Ensanche Naco</title>
    @include('.layouts.navbar')

    <body>

        <!-- Page-->
        <div class="page text-center">

            <!-- Breadcrumbs-->
            <section class="sedes context-dark text-lg-left breadcrumb-inset-left">
                <div class="container section-34 section-md-top-110 section-md-bottom-41">
                    <h1>Ensanche Naco</h1>
                    <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                        <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
                        <li class="list-inline-item"><a class="text-java" href="{{ route('sedes') }}">Sedes</a></li>
                        <li class="list-inline-item active">Sucursal Ensanche Naco</li>
                    </ul>
                </div>
            </section>

            <!-- team member section-->
            <section class="section-sm-top-34 sucursal">
                <div class="mx-5">
                    <div class="row row-50 row-xl-60 justify-content-sm-center">
                        <div class="col-sm-10 col-lg-5">
                            <!-- Member block type 5-->
                            <div class="member-block-type-5 inset-lg-right-20"><img class="center-block" src="images/brand/sedes/Sede_Naco_NOV2019.jpg" alt="Foto de sede en ensanche naco" />
                                <div class="offset-top-24">
                                </div>
                                <div class="offset-top-24">
                                    <p>Disponemos del mejor personal altamente capacitado y profesional para asegurar tu bienestar. </p>
                                </div>
                                {{-- <div class="doctoravailable">
                                <div class="row row-10 row-narrow d-flex flex-row justify-content-center">
                                    @foreach ($doctores  as $doctor)
                                            <div class="m-1 col-3"><a class=" thumbnail-classic" href="/doctormiembro/{{$doctor['nroAfilia']}}"><img src="/{{$doctor['imagenPagDoct']}}" alt="{{$doctor['nombre']}}" width="110" height="110"/></a></div>
                                    @endforeach
                                </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-7 text-lg-left">
                            <div class="row row-30">
                                <div class="col-md-12">
                                <div class="">
                                    <h6 class="">Estamos ubicados en:</h6>
                                    <hr class="text-subline">
                                    <p class="text-center">
                                        Calle presidente González, entre calle Luis Lembert y calle Manuel E. Perdomo local N-4, Naco zona metropolitana, DO
                                    </p>
                                </div>
                            </div>
                            <div class="text-left col-md-12">
                                <h6>Nuestros Consultorios:</h6>
                                <hr class="text-subline">
                                <p class="text-center">Cuentan con el mejor servicio en Consultas Clínicas, Procedimientos Ambulatorios y Clínica Dental, además de brindarte la mejor atención personalizada.</p>
                            </div>
                            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                                <div class="google-maps"></div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.103020252254!2d-69.92679498510789!3d18.4789921874332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89c4056778bb%3A0xea893b7a8898ec6f!2sCalle%20Pdte%20Gonz%C3%A1lez%204%2C%20Santo%20Domingo%2C%20Rep%C3%BAblica%20Dominicana!5e0!3m2!1ses-419!2sve!4v1575582312338!5m2!1ses-419!2sve"width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
            </section>
    </body>

</html>
