<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/favicon.png') }}" alt="Logo" width="42">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">FLUFFY</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Profile">Profile</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="My Task">My Task</span>
        </li>

        <li class="menu-item {{ request()->is('board*') ? 'active' : '' }}">
            <a href="{{ route('board') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-chalkboard'></i>
                <div class="text-truncate" data-i18n="Board">Board</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('task*') ? 'active' : '' }}">
            <a href="{{ route('task.mytask') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div class="text-truncate" data-i18n="My Task">My Task</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-group'></i>
                <div class="text-truncate" data-i18n="Shared">Shared</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-trash'></i>
                <div class="text-truncate" data-i18n="Trash">Trash</div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Misc">Misc</span>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate" data-i18n="Pengaturan">Pengaturan</div>
            </a>
        </li>
        <li class="menu-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="javascript:void(0);" class="menu-link" onclick="this.closest('form').submit()">
                    <i class='menu-icon tf-icons bx bx-log-out'></i>
                    <div class="text-truncate" data-i18n="Logout">Logout</div>
                </a>
            </form>
        </li>
    </ul>



</aside>
