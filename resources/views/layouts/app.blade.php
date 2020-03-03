<!doctype html>
<html lang="es">

@include('.layouts.header')
<body>
    <!-- Page Loader -->
    <div class="preloader">
        <div class="preloader-body">
            <div class="">
                <img src="images/brand/S&FLoading_2.gif" alt="Logo de sinus y face", preloaderclass="">
            </div>
        </div>
    </div>

    <div id="main_content">
        <div class="page">

            @yield('content')

            @include('.layouts.footer')
        </div>
    </div>


<script src={{ asset("/js/instafeed.min.js") }}></script>
<script src={{ asset("/js/jquery.min.js") }}></script>
<script src={{ asset("/js/jquery.pjax.min.js") }}></script>
<script src={{ asset("/js/core.min.js") }}></script>
<script src={{ asset("/js/script.js") }}></script>
<script src={{ asset("/js/main.js") }}></script>
<script src={{ asset("/js/jquery-ui.min.js") }}></script>
<script src={{ asset("/js/jquery.dataTables.min.js") }}></script>
<script src={{ asset("/js/select2.js") }}></script>
<script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });

    $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 180) {
                    $('.btn-cita').slideDown(100);
                    $('.logoNav').fadeIn(300);
                } else {
                    $('.btn-cita').slideUp(100);
                    $('.logoNav').fadeOut(100);
                }
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 180) {
                    $('.top-cita').fadeOut(100);
                } else {
                    $('.top-cita').fadeIn(300);
                }
            });
        });
    </script>


@yield('scripts')
</body>
</html>
