<nav id="sidebar">
    <div class="sidebar-header text-center">
        <img src="/img/integral-putih.png" alt="" width="175">
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard"><img src="/img/home.png" style="width: 30px; heigth: 30px; margin-right: 10px;"></i>Home</a>
        </li>
        <li class="{{ Request::is('dashboard/eservices*') ? 'active' : '' }}">
            <a href="/dashboard/eservices"><img src="/img/eservice.png" style="width: 30px; heigth: 30px; margin-right: 10px;"></i>E-Services</a>
        </li>
        <li class="{{ Request::is('dashboard/aplikasi*') ? 'active' : '' }}">
            <a href="/dashboard/aplikasi"><img src="/img/aplikasi.png" style="width: 30px; heigth: 30px; margin-right: 10px;"></i>Aplikasi</a>
        </li>
        <li class="{{ Request::is('dashboard/big-data*') ? 'active' : '' }}">
            <a href="/dashboard/big-data"><img src="/img/bigdata.png" style="width: 30px; heigth: 30px; margin-right: 10px;"></i>Big Data</a>
        </li>
        <li class="{{ Request::is('dashboard/multimedia*') ? 'active' : '' }}">
            <a href="/dashboard/multimedia"><img src="/img/multimedia.png" style="width: 25px; heigth: 25px; margin-right: 10px;"></i>Multimedia</a>
        </li>
        <li class="{{ Request::is('dashboard/publikasi*') ? 'active' : '' }}">
            <a href="/dashboard/publikasi"><img src="/img/publikasi.png" style="width: 30px; heigth: 30px; margin-right: 10px;"></i>Publikasi</a>
        </li>
    </ul>
</nav>