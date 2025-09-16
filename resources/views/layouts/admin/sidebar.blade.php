<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-websakola-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-websakola-dark.png') }}" alt="" height="30">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/dashboard" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-websakola-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-websakola-light.png') }}" alt="" height="30">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <i class="ri-home-wifi-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li>

                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                @php $smenu = config('sidebar_menu'); @endphp
                @foreach ($smenu as $menuKey => $menu)
                    @include('layouts.admin.menutemplate._menu_block', ['menu' => $menu])
                @endforeach

                <li class="menu-title"><i class="ri-more-fill"></i> <span>@lang('translation.pages')</span></li>
                @php $pages = config('sidebar_pages'); @endphp
                @foreach ($pages as $menuKey => $menu)
                    @include('layouts.admin.menutemplate._menu_block', ['menu' => $menu])
                @endforeach

                <li class="menu-title"><i class="ri-more-fill"></i> <span>@lang('translation.components')</span></li>

                @php $components = config('sidebar_component'); @endphp
                @foreach ($components as $menuKey => $menu)
                    @include('layouts.admin.menutemplate._menu_block', ['menu' => $menu])
                @endforeach

                {{-- @include('layouts.admin.menutemplate.menu')
                @include('layouts.admin.menutemplate.page')
                @include('layouts.admin.menutemplate.component') --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
