<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        @if(auth()->user()->group == 'admin')
        <!-- Menu khusus untuk admin -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Admin Menu</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/user" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Pengguna</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/paslon_categories" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Paslon Kategori</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/hasil_voting" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Hasil Voting</span>
            </a>
        </li>
        <!-- Anda bisa menambahkan menu tambahan untuk admin di sini -->
        <!-- <li class="sidebar-item">
            <a class="sidebar-link" href="/todo_categories" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Kategori Catatan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/todo" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Catatan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/todolist" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Catatan Terjadwal</span>
            </a>
        </li> -->
        @else
        <!-- Menu untuk pengguna non-admin-->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">User Menu</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/user/votingpaslon" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Voting Paslon</span>
            </a>
        </li>
        <!-- Anda bisa menambahkan menu tambahan untuk pengguna non-admin di sini -->
        <!-- <li class="sidebar-item">
            <a class="sidebar-link" href="/profile" aria-expanded="false">
                <span>
                    <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Profil</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/settings" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Pengaturan</span>
            </a>
        </li> -->
        @endif
    </ul>
</nav>