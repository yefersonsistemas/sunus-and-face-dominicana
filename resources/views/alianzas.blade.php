@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Alianzas</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">
<!-- Breadcrumbs-->
<section class="alianzas context-dark text-lg-left">
        <div class="container section-34 section-md-top-110 section-md-bottom-41">
          <h1>Alianzas</h1>
          <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
            <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
            <li class="list-inline-item active">Alianzas</li>
          </ul>
        </div>
</section>

        <!-- Meet Our Partners-->
        <section class="section-98 section-sm-110 bg-default-liac">
        <div class="container">
          <h3 class="efect">Bancos</h3>
          <!-- <hr class="divider divider-lg bg-java"> -->
          <div class="offset-top-66">
            <div class="owl-carousel-middle">
              <!-- owl carousel-->
              <div class="owl-carousel owl-carousel-default owl-carousel-class-light owl-carousel-middle" data-loop="false" data-items="1" data-sm-items="2" data-dots="true" data-mouse-drag="false" data-lg-items="5" data-nav="false">
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_Banco_Popular.png" alt="Logo del banco popular" width="150" height="100"/></a>
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_Banreserva.png" alt="Logo de banreserva" width="150" height="135"/></a>
              </div>
            </div>
          </div>
        </div>
      </section>

        <!-- Meet Our Partners-->
        <section class="section-98 section-sm-110 bg-default-liac">
        <div class="container">
          <h3 class="efect">Aseguradoras</h3>
          <!-- <hr class="divider divider-lg bg-java"> -->
          <div class="offset-top-66">
            <div class="owl-carousel-middle">
              <!-- owl carousel-->
              <div class="owl-carousel owl-carousel-default owl-carousel-class-light owl-carousel-middle" data-loop="false" data-items="1" data-sm-items="2" data-dots="true" data-mouse-drag="false" data-lg-items="5" data-nav="false">
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_ARS_Humano.png" alt="Logo de humano" width="150" height="79"/></a>
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_ARS_Meta_Salud.png" alt="Logo de meta salud" width="150" height="135"/></a>
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_ARS_SEMUNASED.png" alt="Logo de semunased" width="150" height="111"/></a>
              <a ><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_ARS_Yunen.png" alt="Logo de yunen" width="150" height="149"/></a>
              <a><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_Seguros_APS.png" alt="Logo de seguro seguros" width="150" height="117"/></a>
              <a><img class="d-inline-block img-semi-transparent" src="images/brand/alianzas/Logos_Seguros_SENASA.png" alt="Logo de seguro senasa" width="150" height="79"/></a>

              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Become a Partner
      <section class="section-98 section-sm-110">
        <div class="container">
          <h3>Become a Partner</h3>
          <hr class="divider divider-lg bg-java">
          <div class="row justify-content-lg-center offset-top-66">
            <div class="col-lg-8">
              <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                <div class="row justify-content-sm-center">
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-label-outside">
                      <label class="form-label form-label-outside text-dark rd-input-label" for="contacts-first-name">First name</label>
                      <input class="form-input form-input-last-child" id="contacts-first-name" type="text" name="first-name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap form-wrap-label-outside">
                      <label class="form-label form-label-outside text-dark rd-input-label" for="contacts-email">E-mail</label>
                      <input class="form-input form-input-last-child" id="contacts-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-label-outside">
                      <label class="form-label form-label-outside text-dark rd-input-label" for="contacts-last-name">Last name</label>
                      <input class="form-input form-input-last-child" id="contacts-last-name" type="text" name="last-name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap form-wrap-label-outside">
                      <label class="form-label form-label-outside text-dark rd-input-label" for="contacts-phone">Phone</label>
                      <input class="form-input form-input-last-child" id="contacts-phone" type="text" name="last-name" data-constraints=" @Required @Numeric">
                    </div>
                  </div>
                </div>
                <div class="form-wrap form-wrap-label-outside">
                  <label class="form-label form-label-outside text-dark rd-input-label" for="contacts-message">Message</label>
                  <textarea class="form-input form-input-last-child" id="contacts-message" name="message" data-constraints="@Required" style="max-height: 150px;"></textarea>
                </div>
                <div class="offset-top-18 offset-sm-top-30 text-center text-md-left">
                  <button class="btn btn-ellipse btn-java" type="submit" style="min-width: 130px;">send message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->
</body>

</html>
