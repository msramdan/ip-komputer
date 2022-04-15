<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-desktop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ set_active('home') }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    @canany(['unit_show','kategori*'])
        <li class="nav-item {{ set_active(['unit*','kategori*']) }}">
            <a class="nav-link {{ request()->routeIs('unit*','kategori*') ? '' : 'collapsed' }}" href="#"
                data-toggle="collapse" data-target="#collapseMasterData" aria-expanded="true" aria-controls="collapseMasterData">
                <i class="fas fa-fw fa-list"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseMasterData" class="collapse {{ request()->routeIs('unit*','kategori*') ? 'show' : '' }}"
                aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @can('unit_show')
                        <a class="collapse-item {{ set_active(['unit*']) }}" href="{{ route('unit.index') }}"> Unit</a>
                    @endcan
                    @can('kategori_show')
                        <a class="collapse-item {{ set_active(['kategori*']) }}" href="{{ route('kategori.index') }}"> Kategori Produk</a>
                    @endcan
                </div>
            </div>
        </li>
    @endcanany


    @canany(['user_show', 'role_show'])
        <li class="nav-item {{ set_active(['roles*', 'user*']) }}">
            <a class="nav-link {{ request()->routeIs('roles*', 'user*') ? '' : 'collapsed' }}" href="#"
                data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
                <i class="fas fa-fw fa-cogs"></i>
                <span>Setting</span>
            </a>
            <div id="collapsePages3" class="collapse {{ request()->routeIs('roles*', 'user*') ? 'show' : '' }}"
                aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @can('user_show')
                        <a class="collapse-item {{ set_active(['user*']) }}" href="{{ route('user.index') }}"> User</a>
                    @endcan
                    @can('role_show')
                        <a class="collapse-item {{ set_active(['roles*']) }}" href="{{ route('roles.index') }}"> Roles</a>
                    @endcan
                </div>
            </div>
        </li>
    @endcanany
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
