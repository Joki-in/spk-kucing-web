<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    {{-- <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div> --}}

    <div class="mb-2">
        <a href="/dashboard">
            <img width="250px" src="{{ asset('logo/logologin.jpeg.jpg') }}" alt="">
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if(request()->is('dashboard')) active @endif">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item @if(request()->is('penyakit')) active @endif">
            <a href="/penyakit" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Penyakit</div>
            </a>
        </li>
        <li class="menu-item @if(request()->is('gejala')) active @endif">
            <a href="/gejala" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Gejala</div>
            </a>
        </li>

        <li class="menu-item @if(request()->is('simulasi-diagona')) active @endif">
            <a href="/simulasi-diagnosa" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Simulasi Diagnosa</div>
            </a>
        </li>

        <li class="menu-item @if(request()->is('riwayat')) active @endif">
            <a href="/riwayat" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Riwayat</div>
            </a>
        </li>

        <li class="menu-item @if(request()->is('user')) active @endif">
            <a href="/user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">User</div>
            </a>
        </li>

        <li class="menu-item @if(request()->is('artikel')) active @endif">
            <a href="/artikel" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Artikel</div>
            </a>
        </li>


    </ul>
</aside>
