

@if (Auth::user()->roles[0]['id']==1)
    <li class="sidebar-header"><span>{{Auth::user()->name}}</span></li>
    <li class="nav-item">
        <a class="nav-link" href="{!! url('surats.index2') !!}"><span class="fa fa-fw fa-line-chart"></span> Buat Surat</a>
    </li>
@endif

{!! ModuleService::menus() !!}

{!! Cms::packageMenus() !!}

@if (Route::get('admin/users') && Auth::user()->roles[0]['id']==2)
    
    <li class="sidebar-header"><span>{{Auth::user()->name}}</span></li>
    @if (Route::get('admin/dashboard'))
    <li class="nav-item @if (Request::is('admin/dashboard') || Request::is('admin/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
    @endif
    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! route('surats.index') !!}"><span class="fa fa-fw fa-envelope"></span> Surat Masuk</a>
    </li>

@endif

    <li class="sidebar-header"><span>Akun</span></li>

    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{{url('logout')}}"><span class="fa fa-sign-out"></span> Sign Out</a>
    </li>