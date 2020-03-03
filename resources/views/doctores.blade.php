@extends('.layouts.app')
    <title>S&F Clinic Dominicana | Doctores</title>
    @include('.layouts.navbar')

<body>

  <!-- Page-->
  <div class="page text-center">
    <!-- Breadcrumbs-->
    <section class="doctores context-dark text-lg-left">
      <div class="container section-34 section-md-top-110 section-md-bottom-41">
        <h1>Doctores</h1>
        <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
            <li class="list-inline-item"><a class="text-java" href="{{ route('inicio') }}">Home</a></li>
          <li class="list-inline-item active">Doctores</li>
        </ul>
      </div>
    </section>

    <section class="section bg-default my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 m-3">
            <div class="form-gruop col-md-4 float-right">
              <div class="input-group">
                <select name="especialida" id="espec" class="form-control" onchange="show2();">
                <option selected disabled>Buscar Doctor por Especialidad</option>
                <option value="Todos">Todos</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <h3 class="efect">DIRECTORIO MÉDICO</h3>
          </div>
          <!-- <hr class="divider divider-lg bg-java"> -->
          <div class="offset-top-41 offset-lg-top-60" id="prueba">
            <div class="row justify-content-sm-center text-left row-40" id="teamDoctor"></div>
          </div>
        </div>
        <div class="row justify-content-sm-center text-left row-40 " id="teamDoctorResult"></div>
    </section>


</body>

</html>
