@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Asesoría Online</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">

    <!-- Breadcrumbs-->
    <section class="asesoria context-dark text-lg-left">
      <div class="container section-34 section-md-top-110 section-md-bottom-41">
        <h1>Asesoría Online</h1>
        <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
            <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
          <li class="list-inline-item active">Asesoría Online</li>
        </ul>
      </div>
    </section>

    <!-- Get In Touch-->
    <section class="section section-98 section-sm-110 bg-default">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-9 col-lg-8 col-xl-12">
            <div class="row row-50">
              <div class="col-xl-7 text-left">
                <h3 class="efect">PONERSE EN CONTACTO</h3>
                <!-- <hr class="divider divider-lg bg-java hr-left-0 hr-sm-left-2"> -->
                <div class="offset-top-66">
                  <p>Utiliza nuestro formulario de contacto para cualquier información que necesites, dudas, enviar
                    sugerencias o cualquier otra información que necesites.</p>
                  <p>Nuestro equipo responderá tu comunicación a la brevedad posible.</p>
                </div>
                <div class="offset-top-34">
                  <form class="text-left" method="post" action="controllers/mailTo.php">
                    <div class="row justify-content-sm-center">
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-label-outside form-group">
                          <label class="form-label form-label-outside text-dark rd-input-label"
                            for="contacts-first-name">Nombre</label>
                          <input class="form-input form-input-last-child form-control" id="contacts-first-name"
                            type="text" name="email-nombre" data-constraints="@Required">
                        </div>
                        <div class="form-wrap form-wrap-label-outside form-group">
                          <label class="form-label form-label-outside text-dark rd-input-label"
                            for="contacts-email">Correo</label>
                          <input class="form-input form-input-last-child form-control" id="contacts-email" type="email"
                            name="email-correo" data-constraints="@Email @Required">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-label-outside form-group">
                          <label class="form-label form-label-outside text-dark rd-input-label"
                            for="contacts-last-name">Apellido</label>
                          <input class="form-input form-input-last-child form-control" id="contacts-last-name"
                            type="text" name="email-apellido" data-constraints="@Required">
                        </div>
                        <div class="form-wrap form-wrap-label-outside form-group">
                          <label class="form-label form-label-outside text-dark rd-input-label"
                            for="contacts-phone">Teléfono</label>
                          <input class="form-input form-input-last-child form-control" id="contacts-phone" type="text"
                            name="email-telefono" data-constraints=" @Required @Numeric">
                        </div>
                      </div>
                    </div>
                    <div class="form-wrap form-wrap-label-outside form-group">
                      <div class="form-wrap form-wrap-label-outside form-group">
                        <label class="form-label form-label-outside text-dark rd-input-label"
                          for="contacts-subject">Asunto</label>
                        <input class="form-input form-input-last-child form-control" id="contacts-subject" type="text"
                          name="email-asunto" data-constraints=" @Required">
                      </div>
                      <label class="form-label form-label-outside text-dark rd-input-label"
                        for="contacts-message">Mensaje</label>
                      <textarea class="form-input form-input-last-child form-control" id="contacts-message"
                        name="email-mensaje" data-constraints="@Required" style="max-height: 150px;"></textarea>
                    </div>
                    <div
                      class="offset-top-18 offset-sm-top-24 text-center text-md-left form-group justify-content-center d-flex flex-row">
                      <button class="btn btn-ellipse btn-java" type="submit" style="min-width: 130px;">Enviar Mensaje
                        <span><i class="fas fa-paper-plane"></i></span> </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-xl-5 text-left">
                <div class="row-30 row-xl-60 inset-xl-left-40">
                  <div>
                    <h6>Sociales</h6>
                    <hr class="text-subline">
                    <ul class="list-inline">
                      <li class="list-inline-item"><a class="icon fa fa-facebook icon-xxs icon-circle icon-gray-light"
                          href="https://www.facebook.com/SF-Clinic-Dominicana-115475949854762/?modal=admin_todo_tour"
                          target="_blank" rel="nofollow"></a></li>
                      <li class="list-inline-item" rel="nofollow"><a class="icon fa fa-instagram icon-xxs icon-circle icon-gray-light"
                          href="https://www.instagram.com/syf.do/" target="_blank"></a></li>
                      <li class="list-inline-item"><a class="icon fa fa-whatsapp icon-xxs icon-circle icon-gray-light"
                          target="_blank"
                          href="https://api.whatsapp.com/send?phone=+18298480470&text=hola,%20qué%20tal?" rel="nofollow"></a></li>
                    </ul>
                  </div>
                  <div>
                    <h6>Dirección</h6>
                    <hr class="text-subline">
                    <div class="offset-top-20">
                      <div class="unit flex-row unit-spacing-xxs p">
                        <div class="unit-left">
                          <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                        </div>
                        <div class="unit-body">
                          <p><a class="text-gray-dark" href="sedevergerl"><strong>Centro Quirúrgico: </strong>Calle El Vergel 27,
                              Santo Domingo 10107, DO</a></p>
                        </div>
                      </div>
                      <div class="unit flex-row unit-spacing-xxs p">
                        <div class="unit-left">
                          <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                        </div>
                        <div class="unit-body">
                          <p> <a class="text-gray-dark" href="sedenaco"><strong>Centro Profesional: </strong>Calle presidente
                              gonzalez, entre calle Luis Lembert
                              y calle Manuel E. Perdomo local N-4, Naco zona metropolitana, DO</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h6>HORARIO DE APERTURA</h6>
                    <hr class="text-subline">
                    <div class="offset-top-20">
                      <div class="unit flex-row unit-spacing-xxs p">
                        <div class="unit-left">
                          <div class="icon icon-xxs text-middle mdi mdi-calendar-clock text-primary"></div>
                        </div>
                        <div class="unit-body">
                          <div>Turno Mañana</div>
                          <hr class="text-subline">
                          <div>Lun - Sab: 8:00am – 12:00pm</div>
                        </div>
                      </div>
                      <hr class="text-subline">
                      <div class="unit flex-row unit-spacing-xxs p">
                        <div class="unit-left">
                          <div class="icon icon-xxs text-middle mdi mdi-calendar-clock text-primary"></div>
                        </div>
                        <div class="unit-body">
                          <div>Turno Tarde</div>
                          <hr class="text-subline">
                          <div>Lun - Sab: 2:00pm – 6:00pm</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h6>Teléfono</h6>
                    <hr class="text-subline">
                    <div class="offset-top-20">
                      <div class="unit flex-column unit-spacing-xxs p">
                        <div class="d-flex align-items-center">
                          <div class="icon icon-xxs text-middle mdi mdi-phone text-primary mr-3"></div>
                          <div class="unit-body">Centro Profesional (Ensanche Naco): <a class="text-dark d-block"
                              target="_blank"
                              href="https://api.whatsapp.com/send?phone=+18298480470&text=hola,%20qué%20tal?" rel="nofollow">+1 (829)
                              4207590</a></div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="icon icon-xxs text-middle mdi mdi-phone text-primary mr-3"></div>
                          <div class="unit-body">Sede Quirúrgica (El Vergel):<a class="text-dark d-block"
                              target="_blank"
                              href="https://api.whatsapp.com/send?phone=+18298480470&text=hola,%20qué%20tal?" rel="nofollow">+1 (829)
                              4207590</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h6>Correo</h6>
                    <hr class="text-subline">
                    <div class="offset-top-20">
                      <div class="unit flex-column unit-spacing-xxs p">
                        <div class="unit-left d-flex align-items-center">
                          <div class="icon icon-xxs text-middle mdi mdi-email-outline text-primary mr-3"></div>
                          <div class="unit-body"><a class="text-dark"
                              href="mailto:sedeensanchenaco@syfdominicana.com" rel="nofollow">sedeensanchenaco@syfdominicana.com</a>
                          </div>
                        </div>
                        <div class="unit-left d-flex align-items-center">
                          <div class="icon icon-xxs text-middle mdi mdi-email-outline text-primary mr-3"></div>
                          <div class="unit-body"><a class="text-dark"
                              href="mailto:sedeelvergel@syfdominicana.com" rel="nofollow">sedeelvergel@syfdominicana.com</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <hr class="text-subline">
                    <div class="offset-top-20">
                      <div class="unit flex-column unit-spacing-xxs p">
                        <div class="unit-left d-flex align-items-center">
                          <div class="icon icon-xxs text-middle fa fa-building text-primary mr-3"></div>
                          <div class="unit-body">
                            <p>Sinus and Face Internacional Group S.R.L.</p>
                            <p>RNC 1-31-71211-8</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="section">
      <div class="google-map-container" data-center="Calle El Vergel 27, Santo Domingo 10107, DO" data-zoom="5">
        <div class="google-map"></div>
        <ul class="google-map-markers">
          <li data-location="Calle El Vergel 27, Santo Domingo 10107, DO"
            data-description="Calle El Vergel 27, Santo Domingo 10107, DO"></li>
        </ul>
      </div>
    </section> -->

    <section>
      <div class="google-map-container">
        <div class="google-maps"></div>
        <div class="google-map-markerss">
          <iframe src="https://www.google.com/maps/d/embed?mid=1oRtjA1Z1DbKZPYy3Dta-KGo9LJW5h6PC" width="100%"
            height="480"></iframe>
        </div>
      </div>
    </section>
</body>

</html>
