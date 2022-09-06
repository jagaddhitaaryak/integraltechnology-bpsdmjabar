<nav id="sidebar">
    <div class="sidebar-header">
        <img src="/img/logo-integral.png" class="rounded mx-auto d-block" alt="" width="85" height="65">
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard"><i><img src="/img/home.png" alt="" width="35" height="25"></i>Home</a>
        </li>
        <li class="{{ Request::is('dashboard/eservices') ? 'active' : '' }}">
            <a href="/dashboard/eservices"><i><img src="/img/eservice.png" alt="" width="35" height="25"></i>E-Services</a>
        </li>
        <li class="{{ Request::is('dashboard/aplikasi') ? 'active' : '' }}">
            <a href="/dashboard/aplikasi"><i><img src="/img/aplikasi.png" alt="" width="35" height="25"></i>Aplikasi</a>
        </li>

        <li>
            <a href="{{ Request::is('dashboard/bigdata') ? 'active' : '' }}"><i><img src="/img/bigdata.png" alt="" width="35" height="25"></i>Big Data</a>

            <!-- <ul class="collapse list-unstyled" id="bigData">
                <li class="{{ Request::is('dashboard/webinar') ? 'active' : '' }}">
                    <a href="/dashboard/webinar">Webinar</a>
                </li>
                <li class="{{ Request::is('dashboard/pelatihan') ? 'active' : '' }}">
                    <a href="/dashboard/pelatihan">Pelatihan</a>
                </li>
                <li class="{{ Request::is('dashboard/sertifikasi') ? 'active' : '' }}">
                    <a href="/dashboard/sertifikasi">Sertifikasi</a>
                </li>
            </ul> -->
        </li>

        <li class="{{ Request::is('dashboard/multimedia') ? 'active' : '' }}">
            <a href="/dashboard/multimedia"><i><img src="/img/multimedia.png" alt="" width="30" height="25"></i>Multimedia</a>
        </li>
        <li class="{{ Request::is('dashboard/publikasi') ? 'active' : '' }}">
            <a href="/dashboard/publikasi"><i><img src="/img/publikasi.png" alt="" width="35" height="25"></i>Publikasi</a>
        </li>
    </ul>
</nav>