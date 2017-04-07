<div id="sidebar" class="sidebar responsive ace-save-state compact">
  <ul class="nav nav-list">
    @if ($active == 1)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('adminPanel') }}">
        <i class="menu-icon fa fa-pencil-square-o"></i>
        <span class="menu-text"> Kendaraan Masuk </span>
      </a>
    </li>

    @if ($active == 2)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('adminListParkir') }}">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> Daftar &nbsp; Kendaraan </span>
      </a>
    </li>

    @if ($active == 3)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('adminLapor') }}">
        <i class="menu-icon fa fa-bullhorn"></i>
        <span class="menu-text"> Lapor </span>
      </a>
    </li>

    @if ($active == 4)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('panduan') }}">
        <i class="menu-icon fa fa-book"></i>
        <span class="menu-text"> Panduan </span>
      </a>
    </li>

    @if (Auth::user()->super == 1)
      @if ($active == 5)
      <li class="active">
      @else
      <li class="">
      @endif
        <a href="{{ route('addUser') }}">
          <i class="menu-icon fa fa-users"></i>
          <span class="menu-text"> Tambah User </span>
        </a>
      </li>
    @endif

    <li class="">
      <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   <i class="menu-icon glyphicon glyphicon-off"></i>
                   <span class="menu-text"> Keluar </span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    </li>

  </ul>
</div>
