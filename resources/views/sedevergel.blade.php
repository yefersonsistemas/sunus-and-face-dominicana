@extends('.layouts.app')
    <title>S&F Clinic | Sucursal El Vergel</title>
    @include('.layouts.navbar')

    <body>

        <!-- Page-->
        <div class="page text-center">

            <!-- Breadcrumbs-->
            <section class="sedes context-dark text-lg-left breadcrumb-inset-left">
                <div class="container section-34 section-md-top-110 section-md-bottom-41">
                    <h1>El Vergel</h1>
                    <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                        <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
                        <li class="list-inline-item"><a class="text-java" href="{{ route('sedes') }}">Sedes</a></li>
                        <li class="list-inline-item active">Sucursal El Vergel</li>
                    </ul>
                </div>
            </section>

            <!-- team member section-->
            <section class="section-sm-top-34 sucursal">
                <div class="mx-5">
                    <div class="row row-50 row-xl-60 justify-content-sm-center">
                        <div class="col-sm-10 col-lg-5">
                            <!-- Member block type 5-->
                            <div class="member-block-type-5 inset-lg-right-20"><img class="center-block" src="images/brand/sedes/Sede_Vergel.jpg" alt="Foto de la sede en el vergel" />
                                <div class="offset-top-24">
                                </div>
                                <div class="offset-top-24">
                                    <p>Trabajamos de la mano con los mejores especialistas, garantizando tu seguridad y confort con la atencion médica que te mereces.</p>
                                </div>
                                {{-- <div class="doctoravailable">
                                <div class="row row-10 row-narrow d-flex flex-row justify-content-center">
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                    <div class="m-1 col-3"><a class=" thumbnail-classic" href="#"><img src="images/brand/fotos-doctores/user-default.png" alt="" width="110" height="110"/></a></div>
                                </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-7 text-lg-left">
                            <div class="row row-30">
                               <div class="col-md-12">
                                   <div class="">
                                   <!-- <div>Position</div>
                                     <h5 class="font-weight-bold">El Vergel</h5>
                                </div>
                                <div class="col-md-6">  coloca centrado la direccion
                                    <div>Education</div>-->
                                    <h6 class="">Estamos ubicados:</h6>
                                    <hr class="text-subline">
                                    <p class="text-center" class="">En la Calle El Vergel 27, Santo Domingo 10107, DO</p>
                                </div>
                            </div>
                            <div class="text-left col-md-12">
                                <h6>Nuestros Servicios:</h6>
                                <hr class="text-subline">
                                <p class="text-center">Ofrecemos servicios de Emergencia, Hospitalización, Cirugía y Terapia Intensiva con la más alta tegnología.</p>
                            </div>
                            <div class="google-map-container" data-center="" data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                                <div class="google-maps"></div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7568.600373441096!2d-69.920512!3d18.470057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89da425ed03b%3A0xa90c528a1c84867d!2sCalle%20El%20Vergel%2027%2C%20Santo%20Domingo%2010107%2C%20Rep%C3%BAblica%20Dominicana!5e0!3m2!1ses!2sve!4v1574715253252!5m2!1ses!2sve" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- Page Footer-->
    </body>

</html>
