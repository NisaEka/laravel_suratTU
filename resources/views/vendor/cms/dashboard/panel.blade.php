
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
    <li class="nav-item @if (Request::is('admin/suratmasuk') || Request::is('admin/suratmasuk/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratmasuk') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Masuk</a>
    </li>
    <li class="nav-item @if (Request::is('admin/suratproses') || Request::is('admin/suratproses/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratproses') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Di Proses</a>
    </li>
    <li class="nav-item @if (Request::is('admin/suratkeluar') || Request::is('admin/suratkeluar/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/suratkeluar') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Keluar</a>
    </li>
    <li class="sidebar-header"><span>Lainnya</span></li>
    @if (Route::get('admin/users'))
    <li class="nav-item @if (Request::is('admin/users') || Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/users') !!}"><span class="fa fa-fw fa-users"></span> Users</a>
    </li>
    <li class="nav-item @if (Request::is('pejabats') || Request::is('pejabats/*')) active @endif">
        <a class="nav-link" href="{!! url('pejabats') !!}"><span class="fa fa-fw fa-book"></span> Pejabat</a>
    </li>
    @endif
    <li class="nav-item @if (Request::is('jenissurats') || Request::is('jenissurats/*')) active @endif">
        <a class="nav-link" href="{{route('jenissurats.index')}}"><span class="fa fa-fw fa-envelope"></span> Jenis Surat</a>
    </li>
@endif

    <li class="sidebar-header"><span>Akun</span></li>

    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{{url('logout')}}"><span class="fa fa-sign-out"></span> Sign Out</a>
    </li>