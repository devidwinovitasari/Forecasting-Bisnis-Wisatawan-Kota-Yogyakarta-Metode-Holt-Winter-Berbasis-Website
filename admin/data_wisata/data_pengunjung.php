<!DOCTYPE html>
<html>
<?php

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
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
        <a class="navbar-brand" href="./data_pengunjung.php">
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
              <!-- Sidenav toggler -->
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page content -->
    <div class="container-fluid bg-success">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div class="a">
                <h3 class="mb-0">Data kunjungan wisata
                  <?php
                  if (isset($_GET['id_wisata'])) {
                    $data = mysqli_query($koneksi, "SELECT id_wisata, nama_wisata FROM tabel_wisata");
                    $baris = mysqli_num_rows($data);
                    $wisata = mysqli_fetch_array($data);
                    echo $wisata['nama_wisata'];
                  } else {
                    echo '';
                  } ?>
                </h3>
              </div>
              <div class="b">
                <a href="./form_pengunjung.php?id_wisata=7" class="btn btn-outline-success">
                  <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                  <span class="btn-inner--text">Tambah kunjungan</span>
                </a>
              </div>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-stripped" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>Periode</th>
                    <th>Wisata</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Pengunjung</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_GET['id_wisata'])) {
                    $query = mysqli_query($koneksi, "SELECT * FROM tabel_kunjungan NATURAL JOIN tabel_wisata WHERE id_wisata = '$_GET[id_wisata]' ORDER BY periode");
                    $baris = mysqli_num_rows($query);
                  } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM tabel_kunjungan NATURAL JOIN tabel_wisata ORDER BY periode");
                    $baris = mysqli_num_rows($query);
                  }
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['nama_wisata']; ?></td>
                      <td>
                        <?php
                        if ($data['bulan'] == 1) {
                          echo 'Januari';
                        } elseif ($data['bulan'] == 2) {
                          echo 'Februari';
                        } elseif ($data['bulan'] == 3) {
                          echo 'Maret';
                        } elseif ($data['bulan'] == 4) {
                          echo 'April';
                        } elseif ($data['bulan'] == 5) {
                          echo 'Mei';
                        } elseif ($data['bulan'] == 6) {
                          echo 'Juni';
                        } elseif ($data['bulan'] == 7) {
                          echo 'Juli';
                        } elseif ($data['bulan'] == 8) {
                          echo 'Agustus';
                        } elseif ($data['bulan'] == 9) {
                          echo 'September';
                        } elseif ($data['bulan'] == 10) {
                          echo 'Oktober';
                        } elseif ($data['bulan'] == 11) {
                          echo 'November';
                        } elseif ($data['bulan'] == 12) {
                          echo 'Desember';
                        } else {
                          echo 'erro';
                        }; ?>
                      </td>
                      <td>
                        <?php echo $data['tahun']; ?>
                      </td>
                      <td>
                        <?php echo number_format($data['jumlah_pengunjung'], 2, ",", "."); ?>
                      </td>
                      <td class="table-actions">
                        <a href="./form_pengunjung.php?id_kunjungan=<?php echo $data['id_kunjungan'] ?>" class="table-action text-primary" data-toggle="tooltip" data-original-title="Edit">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="delete_pengunjung.php?id_kunjungan=<?php echo $data['id_kunjungan'] ?>" class="table-action text-danger" data-toggle="tooltip" data-original-title="Delete" onclick="confirm('yakin ingin menghapus?')">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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