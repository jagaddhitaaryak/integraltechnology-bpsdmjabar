<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard"><i class="fa-solid fa-house-chimney"></i>Home</a>
        </li>
        <li class="{{ Request::is('dashboard/eservices') ? 'active' : '' }}">
            <a href="/dashboard/eservices"><i class="fa-solid fa-screwdriver-wrench"></i>E-Services</a>
        </li>
        <li class="{{ Request::is('dashboard/aplikasi') ? 'active' : '' }}">
            <a href="/dashboard/aplikasi"><i class="fa-solid fa-mobile-screen-button"></i>Aplikasi</a>
        </li>

        <li>
            <a href="#bigData" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-folder-open"></i>Big Data</a>

            <ul class="collapse list-unstyled" id="bigData">
                <li class="{{ Request::is('dashboard/webinar') ? 'active' : '' }}">
                    <a href="/dashboard/webinar">Webinar</a>
                </li>
                <li class="{{ Request::is('dashboard/pelatihan') ? 'active' : '' }}">
                    <a href="/dashboard/pelatihan">Pelatihan</a>
                </li>
                <li class="{{ Request::is('dashboard/sertfikasi') ? 'active' : '' }}">
                    <a href="/dashboard/sertifikasi">Sertifikasi</a>
                </li>
            </ul>
        </li>

        <li class="{{ Request::is('dashboard/multimedia') ? 'active' : '' }}">
            <a href="/dashboard/multimedia"><i class="fa-solid fa-camera"></i>Multimedia</a>
        </li>
        <li class="{{ Request::is('dashboard/publikasi') ? 'active' : '' }}">
            <a href="/dashboard/publikasi"><i class="fa-solid fa-location-arrow"></i>Publikasi</a>
        </li>
    </ul>
</nav>