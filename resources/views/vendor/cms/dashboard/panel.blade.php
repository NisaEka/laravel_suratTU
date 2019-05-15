
<li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
    <a class="nav-link" href="{!! url(cms()->backendRoute.'/dashboard') !!}"><span class="fa fa-fw fa-line-chart"></span> {{Auth::user()->name}}</a>
</li>

@if (Auth::user()->roles[0]['id']==1)
    <li class="nav-item">
        <a class="nav-link" href="{!! url('surats.index2') !!}"><span class="fa fa-fw fa-line-chart"></span> Surat</a>
    </li>
@endif

{!! ModuleService::menus() !!}

{!! Cms::packageMenus() !!}

@if (Route::get('admin/users'))
    <li class="sidebar-header"><span>Admin</span></li>
@endif

    <li class="nav-item @if (Request::is(cms()->backendRoute.'/dashboard')) active @endif">
        <a class="nav-link" href="{!! route('surats.index') !!}"><span class="fa fa-fw fa-line-chart"></span> Surat</a>
    </li>

@if (Route::get('admin/dashboard'))
    <li class="nav-item @if (Request::is('admin/dashboard') || Request::is('admin/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
@endif
@if (Route::get('admin/users'))
    <li class="nav-item @if (Request::is('admin/users') || Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/users') !!}"><span class="fa fa-fw fa-users"></span> Users</a>
    </li>
@endif
@if (Route::get('admin/roles'))
    <li class="nav-item @if (Request::is('admin/roles') || Request::is('admin/roles/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/roles') !!}"><span class="fa fa-fw fa-lock"></span> Roles</a>
    </li>
@endif
