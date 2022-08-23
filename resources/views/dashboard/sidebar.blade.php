<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/sidebar.css">

</head>
<body>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-3 mt-5">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-eservices-list" data-bs-toggle="list" href="#list-eservices" role="tab" aria-controls="list-home">E-Services</a>
                    <a class="list-group-item list-group-item-action" id="list-aplikasi-list" data-bs-toggle="list" href="#list-aplikasi" role="tab" aria-controls="list-aplikasi">Aplikasi</a>
                    <!-- Big Data -->
                    <a class="btn btn-secondary dropdown-toggle list-group-item list-group-item-action" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Big Data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item list-group-item list-group-item-action" id="list-webinar-list" data-bs-toggle="list" href="#list-webinar" role="tab" aria-controls="list-webinar">Webinar</a></li>
                        <li><a class="dropdown-item list-group-item list-group-item-action" id="list-pelatihan-list" data-bs-toggle="list" href="#list-pelatihan" role="tab" aria-controls="list-pelatihan" href="#">Pelatihan</a></li>
                        <li><a class="dropdown-item list-group-item list-group-item-action" id="list-sertifikasi-list" data-bs-toggle="list" href="#list-sertifikasi" role="tab" aria-controls="list-sertifikasi" href="#">Sertifikasi</a></li>
                    </ul>
                    <a class="list-group-item list-group-item-action" id="list-multimedia-list" data-bs-toggle="list" href="#list-multimedia" role="tab" aria-controls="list-multimedia">Multimedia</a>
                    <a class="list-group-item list-group-item-action" id="list-publikasi-list" data-bs-toggle="list" href="#list-publikasi" role="tab" aria-controls="list-publikasi">Publikasi</a>
                    </div>
                </div>
                <div class="col-8 mt-5">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- E-Services -->
                        <div class="tab-pane fade show active" id="list-eservices" role="tabpanel" aria-labelledby="list-eservices-list">
                            <section class="container">
                                <form>    
                                    <img src="/img/eservice.png" alt="" width="30%" height="30%">
                                    <div class="row form-group">
                                        <div class="col-sm-8">   
                                            <!-- Date -->
                                            <div class="input-group date" id="datepicker" >
                                                <input type="text" class="form-control" placeholder="Tanggal">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <!-- Nama Kegiatan -->
                                            <div class="input-group mb-3 mt-3">
                                                <input type="text" class="form-control" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%">
                                            </div>
                                            <!-- Jadwal Kegiatan -->
                                            <div class="input-group mb-3 mt-3">
                                                <input type="text" class="form-control" placeholder="Jadwal Kegiatan" aria-label="Jadwal Kegiatan" width="50%">
                                            </div>
                                            <!-- Jumlah Peserta -->
                                            <div class="input-group mb-3 mt-3">
                                                <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                            </div>
                                            <!-- Upload Data Peserta -->
                                            <label for="formFile" class="form-label">Upload Data Peserta</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                            </div>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                            <!-- start popup -->
                                            <div id=”close”>
                                            <div class=”container-popup”>
                                            <form action=”#” method=”post” class=”popup-form”>
                                            <img src=”http://files.wacana.siap.web.id/content/uploads/2016/06/kursus-desain-jakarta.jpg” alt=””>
                                            </form>
                                            <a class=”close” href=”#close”>close</a>
                                            </div>
                                            </div>
                                            <!-- end popup -->
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                        <!-- Aplikasi -->
                        <div class="tab-pane fade" id="list-aplikasi" role="tabpanel" aria-labelledby="list-aplikasi-list">
                            <section class="container">
                                <form>
                                <img src="/img/aplikasi.png" alt="" width="30%" height="30%">
                                    <div class="row form-group">
                                        <div class="col-sm-8">   
                                            <!-- Nama Aplikasi -->
                                            <div class="input-group mb-3 mt-3">
                                                <input type="text" class="form-control" placeholder="Nama Aplikasi" aria-label="Nama Aplikasi" width="50%">
                                            </div>
                                            <!-- Link Aplikasi -->
                                            <div class="input-group mb-3 mt-3">
                                                <input type="text" class="form-control" placeholder="Link Aplikasi" aria-label="Link Aplikasi" width="50%">
                                            </div>
                                            <!-- Deskripsi Aplikasi -->
                                            <div class="input-group mb-3 mt-3">
                                                <textarea class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                        <!-- Big Data -->
                            <!-- Webinar -->
                            <div class="tab-pane fade" id="list-webinar" role="tabpanel" aria-labelledby="list-webinar-list">
                                <section class="container">
                                    <form>    
                                        <div class="row form-group">
                                            <div class="col-sm-8">   
                                                <!-- Date -->
                                                <div class="input-group date" id="pelatihan" >
                                                    <input type="text" class="form-control" placeholder="Tanggal">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <!-- Nama Kegiatan -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Nama Kegiatan Webinar" aria-label="Nama Kegiatan Webinar" width="50%">
                                                </div>
                                                <!-- Bidang Penyelenggara -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%">
                                                </div>
                                                <!-- Jumlah Peserta -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                                </div>
                                                <!-- Link Sertifikat -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%">
                                                </div>
                                                <!-- Upload Foto Kegiatan -->
                                                <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <!-- Upload Data Peserta -->
                                                <label for="formFile" class="form-label">Upload Data Peserta</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                            <!-- Pelatihan -->
                            <div class="tab-pane fade" id="list-pelatihan" role="tabpanel" aria-labelledby="list-pelatihan-list">
                                <section class="container">
                                    <form>    
                                        <div class="row form-group">
                                            <div class="col-sm-8">   
                                                <!-- Date -->
                                                <div class="input-group date" id="webinar" >
                                                    <input type="text" class="form-control" placeholder="Tanggal">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <!-- Nama Kegiatan -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Nama Pelatihan" aria-label="Nama Pelatihan" width="50%">
                                                </div>
                                                <!-- Bidang Penyelenggara -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%">
                                                </div>
                                                <!-- Jumlah Peserta -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                                </div>
                                                <!-- Link Sertifikat -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%">
                                                </div>
                                                <!-- Upload Foto Kegiatan -->
                                                <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <!-- Upload Data Peserta -->
                                                <label for="formFile" class="form-label">Upload Data Peserta</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                            <!-- Sertifikasi -->
                            <div class="tab-pane fade" id="list-sertifikasi" role="tabpanel" aria-labelledby="list-sertifikasi-list">
                                <section class="container">
                                    <form>    
                                        <div class="row form-group">
                                            <div class="col-sm-8">   
                                                <!-- Date -->
                                                <div class="input-group date" id="sertifikasi" >
                                                    <input type="text" class="form-control" placeholder="Tanggal">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <!-- Nama Kegiatan -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Nama Kegiatan Sertifikasi" aria-label="Nama Pelatihan" width="50%">
                                                </div>
                                                <!-- Bidang Penyelenggara -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%">
                                                </div>
                                                <!-- Jumlah Peserta -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                                </div>
                                                <!-- Link Sertifikat -->
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%">
                                                </div>
                                                <!-- Upload Foto Kegiatan -->
                                                <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <!-- Upload Data Peserta -->
                                                <label for="formFile" class="form-label">Upload Data Peserta</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                                </div>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        
                        <!-- Multimedia -->
                        <div class="tab-pane fade" id="list-multimedia" role="tabpanel" aria-labelledby="list-multimedia-list">...</div>
                        
                        <!-- Publikasi -->
                        <div class="tab-pane fade" id="list-publikasi" role="tabpanel" aria-labelledby="list-publikasi-list">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

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
<script src="https://kit.fontawesome.com/848026e0b0.js" crossorigin="anonymous"></script>
</html>

