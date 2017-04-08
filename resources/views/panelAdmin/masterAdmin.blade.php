<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('assets/icon/favicon2.png')}}" sizes="16x16" type="image/png">
    <title>Admin PARKIRKU</title>

    <!-- CSS FILE -->
    @include('panelAdmin.stylesheet.css')

  </head>
  <body class="skin-2">

    <!-- NAVBAR -->
    @include('panelAdmin.masterKonten.navbar')

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

      <!-- SIDEBAR -->
      @yield('sidebar')

      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">

            <!-- CONTENTNAVBAR -->
            @yield('contentNavbar')

          </div>
          <div class="page-content">
            <!-- PAGE CONTENT BEGINS -->
            @yield('layanan')
            <!-- PAGE CONTENT ENDS -->
          </div>
        </div>
      </div>

      <!-- FOOTERCONTENT -->
      @include('panelAdmin.masterKonten.footerContent')

    </div>

    <!-- JS FILE -->
    @include('panelAdmin.stylesheet.js')

  </body>
</html>
