
    <li class="sidebar-header"><span>{{Auth::user()->name}}</span></li>
@if (Auth::user()->roles[0]['id']==1)
    <li class="nav-item @if (Request::is('member/dashboard') || Request::is('member/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('member/dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
    <li class="nav-item  @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! route('surats.create') !!}"><span class="fa fa-fw fa-envelope"></span> Buat Surat</a>
    </li>
    <li class="nav-item  @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! url('surats') !!}"><span class="fa fa-fw fa-envelope"></span> Pengajuan Surat</a>
    </li>
@endif

{!! ModuleService::menus() !!}

{!! Cms::packageMenus() !!}

@if (Route::get('admin/users') && Auth::user()->roles[0]['id']==2)

    
    @if (Route::get('admin/dashboard'))
    <li class="nav-item @if (Request::is('admin/dashboard') || Request::is('admin/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
    @endif
    <li class="sidebar-header"><span>Surat</span></li>
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratmasuk') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Masuk</a>
    </li>
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratproses') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Di Proses</a>
    </li>
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratkeluar') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Keluar</a>
    </li>
    <li class="sidebar-header"><span>Lainnya</span></li>
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{{route('mahasiswas.index')}}"><span class="fa fa-fw fa-user"></span> Mahasiswa</a>
    </li>
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{{route('jenissurats.index')}}"><span class="fa fa-fw fa-envelope"></span> Jenis Surat</a>
    </li>
@endif

    <li class="sidebar-header"><span>Akun</span></li>

    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{{url('logout')}}"><span class="fa fa-sign-out"></span> Sign Out</a>
    </li>