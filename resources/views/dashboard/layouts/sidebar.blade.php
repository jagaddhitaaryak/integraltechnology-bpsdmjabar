<nav id="sidebar">
    <div class="sidebar-header text-center">
        <img src="/img/integral-putih.png" alt="" width="175" >
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard"><i class="fa-solid fa-house-chimney"></i>Home</a>
        </li>
        <li class="{{ Request::is('dashboard/eservices*') ? 'active' : '' }}">
            <a href="/dashboard/eservices"><i class="fa-solid fa-screwdriver-wrench"></i>E-Services</a>
        </li>
        <li class="{{ Request::is('dashboard/aplikasi*') ? 'active' : '' }}">
            <a href="/dashboard/aplikasi"><i class="fa-solid fa-mobile-screen-button"></i>Aplikasi</a>
        </li>
        <li class="{{ Request::is('dashboard/big-data*') ? 'active' : '' }}">
            <a href="/dashboard/big-data"><i class="fa-solid fa-folder-open"></i>Big Data</a>
        </li>
        <li class="{{ Request::is('dashboard/multimedia*') ? 'active' : '' }}">
            <a href="/dashboard/multimedia"><i class="fa-solid fa-camera"></i>Multimedia</a>
        </li>
        <li class="{{ Request::is('dashboard/publikasi*') ? 'active' : '' }}">
            <a href="/dashboard/publikasi"><i class="fa-solid fa-location-arrow"></i>Publikasi</a>
        </li>
    </ul>
</nav>