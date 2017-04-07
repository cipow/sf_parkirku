<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
            </div>
        </div>
    </header>

    <section id="check_kuota">
      @yield('kuota')
    </section>

    <section class="bg-dark" id="lapor">
      @include('homePage.konten.lapor')
    </section>

    @include('homePage.style.js')
    <script type="text/javascript">
      windows.onload = function (){
        var section = document.getElementById("check_kuota");
      }
      setInterval(onload,1000);
      setTimeout(onload,1);
    </script>
  </body>
</html>
