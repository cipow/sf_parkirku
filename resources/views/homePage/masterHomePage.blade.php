<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('assets/icon/favicon2.png')}}" sizes="16x16" type="image/png">
    <title>PARKIRKU</title>
    @include('homePage.style.css')
  </head>
  <body id="page-top">

    @include('homePage.konten.navbar')

    <header style="background-image: url('{{asset('assets/images/parkir0.jpg')}}');">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">PARKIR KAMPUS UDINUS</h1>
                <hr>
                <p><font color="white">
                  Mari Lihat Kapasitas Parkir UDINUS <br>
                  Sebelum Memarkirkan Kendaraan
                </font></p>
                <a href="#check_kuota" class="btn btn-primary btn-xl page-scroll">Check Kuota Parkir</a>
                <br><br>
                <a href="#lapor" class="btn btn-success btn-xl page-scroll">Lapor !!!</a>
            </div>
        </div>
    </header>

    <section id="check_kuota">
      @yield('kuota')
    </section>

    <section class="bg-dark" id="lapor">
      @include('homePage.konten.lapor')
    </section>

    <a class="btn btn-danger" href="#" id="btn-scroll-up" style="display:none;position:fixed;bottom:25px;right:25px;">
      <i class="glyphicon glyphicon-arrow-up"></i><br>
    </a>

    @include('homePage.style.js')

    <script type="text/javascript">
    $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      if (scroll < 300) {
        $('#btn-scroll-up').css('display','none');
      } else {
        $('#btn-scroll-up').css('display','inline');
      }
    });
    </script>

  </body>
</html>
