<!DOCTYPE html>
<html>
<?php
session_start();

include "../../koneksi.php";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Forecasting Wisata Jogja</title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="../../assets/vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendor/quill/dist/quill.core.css">

    <link rel="stylesheet" href="../../assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../../assets/css/argon.min.css?v=1.2.0" type="text/css">
</head>

<body>
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  d-flex  align-items-center">
                <a class="navbar-brand" href="./data_wisata.php">
                    <span class="text-success font-weight-bold">Wisata Jogja</span>
                </a>
                <div class=" ml-auto ">
                    <!-- Sidenav toggler -->
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../data_wisata/data_pengunjung.php">
                                <i class="fa fa-database" style="color: #20c997;"></i>
                                <span class="nav-link-text">Data Pengunjung</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../forecasting/form_peramalan.php">
                                <i class="fa fa-diagnoses" style="color: #20c997;"></i>
                                <span class="nav-link-text">Forecasting</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-success border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content -->
        <div class="container-fluid bg-success" style="height: 100vh;">
            <div class="row">
                <div class="col">
                    <!-- Members list group card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-0">Form Data Kunjungan</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="<?php if (isset($_GET['id_kunjungan'])) {
                                                echo "update_pengunjung.php";
                                            } else {
                                                echo "tambah_pengunjung.php";
                                            } ?>" method="post" class="needs-validation" novalidate>
                                <!-- Input groups with icon -->
                                <?php if (isset($_GET['id_kunjungan'])) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php
                                            $data = mysqli_query($koneksi, "SELECT * FROM tabel_kunjungan NATURAL JOIN tabel_wisata WHERE id_kunjungan = '$_GET[id_kunjungan]'");
                                            $baris = mysqli_num_rows($data);
                                            $kunjungan = mysqli_fetch_array($data);
                                            ?>
                                            <input name="id_kunjungan" id="id_kunjungan" class="form-control" placeholder="Id Wisata" type="hidden" value="<?php echo $kunjungan['id_kunjungan'] ?>" required readonly>
                                            <div class="form-group">
                                                <input name="periode" id="periode" type="number" class="form-control" placeholder="Periode" value="<?php echo $kunjungan['periode'] ?>" required readonly>
                                            </div>
                                            <div class="form-group">
                                                <select name="bulan" id="bulan" class="form-control" data-toggle="select" required>
                                                    <option disabled>--Pilih bulan--</option>
                                                    <?php
                                                    $bulan = 1;
                                                    while ($bulan <= 12) {
                                                    ?>
                                                        <option value="<?php echo $bulan ?>" <?php if ($bulan == $kunjungan['bulan']) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                            <?php
                                                            if ($bulan == 1) {
                                                                echo 'Januari';
                                                                $bulan++;
                                                            } elseif ($bulan == 2) {
                                                                echo 'Februari';
                                                                $bulan++;
                                                            } elseif ($bulan == 3) {
                                                                echo 'Maret';
                                                                $bulan++;
                                                            } elseif ($bulan == 4) {
                                                                echo 'April';
                                                                $bulan++;
                                                            } elseif ($bulan == 5) {
                                                                echo 'Mei';
                                                                $bulan++;
                                                            } elseif ($bulan == 6) {
                                                                echo 'Juni';
                                                                $bulan++;
                                                            } elseif ($bulan == 7) {
                                                                echo 'Juli';
                                                                $bulan++;
                                                            } elseif ($bulan == 8) {
                                                                echo 'Agustus';
                                                                $bulan++;
                                                            } elseif ($bulan == 9) {
                                                                echo 'September';
                                                                $bulan++;
                                                            } elseif ($bulan == 10) {
                                                                echo 'Oktober';
                                                                $bulan++;
                                                            } elseif ($bulan == 11) {
                                                                echo 'November';
                                                                $bulan++;
                                                            } elseif ($bulan == 12) {
                                                                echo 'Desember';
                                                                $bulan++;
                                                            } else {
                                                                echo 'error';
                                                                break;
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input name="tahun" id="tahun" type="number" class="form-control" placeholder="Tahun" value="<?php echo $kunjungan['tahun'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input name="jumlah_pengunjung" id="jumlah_pengunjung" type="number" class="form-control" placeholder="Jumlah pengunjung" value="<?php echo $kunjungan['jumlah_pengunjung'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <?php
                                                $data = mysqli_query($koneksi, "SELECT id_wisata FROM tabel_kunjungan WHERE id_wisata = '$_GET[id_wisata]'");
                                                $baris = mysqli_num_rows($data);
                                                ?>
                                                <input name="periode" id="periode" type="number" class="form-control" placeholder="Periode" value="<?php echo $baris + 1 ?>" required readonly>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_wisata" id="id_wisata" class="form-control" data-toggle="select" required readonly>
                                                    <option disabled>--Pilih wisata--</option>
                                                    <?php
                                                    $data = mysqli_query($koneksi, "SELECT id_wisata, nama_wisata FROM tabel_wisata ORDER BY nama_wisata");
                                                    $baris = mysqli_num_rows($data);
                                                    while ($wisata = mysqli_fetch_array($data)) {
                                                    ?>
                                                        <option value="<?php echo $wisata['id_wisata'] ?>" <?php if ($wisata['id_wisata'] == $_GET['id_wisata']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>><?php echo $wisata['nama_wisata'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="bulan" id="bulan" class="form-control" data-toggle="select" required>
                                                    <option disabled>--Pilih bulan--</option>
                                                    <?php
                                                    $bulan = 1;
                                                    while ($bulan <= 12) {
                                                    ?>
                                                        <option value="<?php echo $bulan ?>" <?php if ($bulan == date("m")) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                            <?php
                                                            if ($bulan == 1) {
                                                                echo 'Januari';
                                                                $bulan++;
                                                            } elseif ($bulan == 2) {
                                                                echo 'Februari';
                                                                $bulan++;
                                                            } elseif ($bulan == 3) {
                                                                echo 'Maret';
                                                                $bulan++;
                                                            } elseif ($bulan == 4) {
                                                                echo 'April';
                                                                $bulan++;
                                                            } elseif ($bulan == 5) {
                                                                echo 'Mei';
                                                                $bulan++;
                                                            } elseif ($bulan == 6) {
                                                                echo 'Juni';
                                                                $bulan++;
                                                            } elseif ($bulan == 7) {
                                                                echo 'Juli';
                                                                $bulan++;
                                                            } elseif ($bulan == 8) {
                                                                echo 'Agustus';
                                                                $bulan++;
                                                            } elseif ($bulan == 9) {
                                                                echo 'September';
                                                                $bulan++;
                                                            } elseif ($bulan == 10) {
                                                                echo 'Oktober';
                                                                $bulan++;
                                                            } elseif ($bulan == 11) {
                                                                echo 'November';
                                                                $bulan++;
                                                            } elseif ($bulan == 12) {
                                                                echo 'Desember';
                                                                $bulan++;
                                                            } else {
                                                                echo 'error';
                                                                break;
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input name="tahun" id="tahun" type="number" class="form-control" placeholder="Tahun" value="<?php echo date("Y") ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input name="jumlah_pengunjung" id="jumlah_pengunjung" type="number" class="form-control" placeholder="Jumlah pengunjung" required>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['id_kunjungan'])) { ?>
                                    <input name="Update" type="submit" value="Update" class="btn btn-primary" />
                                    <a href="./data_pengunjung.php?id_wisata=7" onclick="return confirm('Apakah anda akan keluar?');">
                                        <input name="Kembali" type="button" value="Kembali" class="btn btn-danger" />
                                    </a>
                                <?php } else { ?>
                                    <input name="Simpan" type="submit" value="Simpan" class="btn btn-primary" />
                                    <a href="./data_pengunjung.php?id_wisata=7" onclick="return confirm('Apakah anda akan keluar?');">
                                        <input name="Kembali" type="button" value="Kembali" class="btn btn-danger" />
                                    </a>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../../assets/vendor/list.js/dist/list.min.js"></script>

    <script src="../../assets/vendor/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/vendor/moment.min.js"></script>
    <script src="../../assets/vendor/bootstrap-datetimepicker.js"></script>
    <script src="../../assets/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="../../assets/vendor/quill/dist/quill.min.js"></script>
    <script src="../../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker({
                icons: {
                    time: "fa fa-clock",
                    date: "fa fa-calendar-day",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        });
    </script>

    <script>
        $('#mainform').submit(function() {
            $('#formdata_container').show();
            $('#formdata').html($(this).serialize());
            return false;
        });

        $('#enableselect').click(function() {
            $('#mainform input[name=animal]')
                .attr("disabled", true);

            $('#animal-select')
                .attr('disabled', false)
                .attr('name', 'animal');

            $('#enableselect').hide();
            return false;
        });
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.min.js?v=1.2.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="../../assets/js/demo.min.js"></script>
    <script>
        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
</body>

</html>