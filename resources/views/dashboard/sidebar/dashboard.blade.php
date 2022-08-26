<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/ardan.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
            </div>
            <ul class="list-unstyled components list-group" id="list-tab" role="tablist">
                <li id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
                    <a href="#list-home"><i class="fa-solid fa-house-chimney"></i>Home</a>
                </li>
                <li id="list-eservices-list" data-bs-toggle="list" href="#list-eservices" role="tab" aria-controls="list-eservices">
                    <a href="/dashboard/eservices"><i class="fa-solid fa-screwdriver-wrench"></i>E-Services</a>
                </li>
                <li id="list-aplikasi-list" data-bs-toggle="list" href="#list-aplikasi" role="tab" aria-controls="list-aplikasi">
                    <a href="/dashboard/aplikasi"><i class="fa-solid fa-mobile-screen-button"></i>Aplikasi</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-folder-open"></i>
                        Big Data
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li id="list-webinar-list" data-bs-toggle="list" href="#list-webinar" role="tab" aria-controls="list-webinar"><a href="/dashboard/webinar">Webinar</a></li>
                        <li id="list-pelatihan-list" data-bs-toggle="list" href="#list-pelatihan" role="tab" aria-controls="list-pelatihan"><a href="/dashboard/pelatihan">Pelatihan</a></li>
                        <li id="list-sertifikasi-list" data-bs-toggle="list" href="#list-sertifikasi" role="tab" aria-controls="list-sertifikasi"><a href="/dashboard/sertifikasi">Sertifikasi</a></li>
                    </ul>
                </li>
                <li id="list-multimedia-list" data-bs-toggle="list" href="#list-multimedia" role="tab" aria-controls="list-multimedia">
                    <a href="/dashboard/multimedia"><i class="fa-solid fa-camera"></i>Multimedia</a>
                </li>
                <li id="list-publikasi-list" data-bs-toggle="list" href="#list-publikasi" role="tab" aria-controls="list-publikasi">
                    <a href="/dashboard/publikasi"><i class="fa-solid fa-location-arrow"></i>Publikasi</a>
                </li>
            </ul>
        </nav>
        <!-- Tutup sidebar -->

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid m--auto">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Tutup Page Content -->
    </div>
    <!-- Tutup Wrapper -->

    <!-- FOOTER -->
    <footer class="text-center bg-primary p-4">
        <span class="text-white fw-bold">© 2022 Tim UNPAS</span>
    </footer>
    <!-- AKHIR FOOTER -->
    
    

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Date E-Services -->
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>
<!-- Date Webinar -->
<script type="text/javascript">
    $(function() {
        $('#webinar').datepicker();
    });
</script>
<!-- Date Pelatihan -->
<script type="text/javascript">
    $(function() {
        $('#pelatihan').datepicker();
    });
</script>
<!-- Date Sertifikasi -->
<script type="text/javascript">
    $(function() {
        $('#sertifikasi').datepicker();
    });
</script>
<!-- Date Multimedia -->
<script type="text/javascript">
    $(function() {
        $('#multimedia').datepicker();
    });
</script>
<!-- Date Publikasi -->
<script type="text/javascript">
    $(function() {
        $('#publikasi').datepicker();
    });
</script>
<script src="https://kit.fontawesome.com/848026e0b0.js" crossorigin="anonymous"></script>
</body>

</html>