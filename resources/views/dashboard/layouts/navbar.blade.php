<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item me-3">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <a class="btn btn-danger" href="/logout">Logout</a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
