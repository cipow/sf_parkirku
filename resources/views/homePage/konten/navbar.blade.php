<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- TAMPILAN MOBILE -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">PARKIRKU</a>
        </div>

        <!-- LINK PAGE -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#check_kuota">Kuota Parkir</a>
                </li>
                <li>
                    <a class="page-scroll" href="#lapor">Lapor !!!</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ route('daftarLapor') }}">Daftar Lapor</a>
                </li>
                @if(!Auth::guest())
                <li>
                    <a href="{{ route('adminPanel') }}">Admin</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
