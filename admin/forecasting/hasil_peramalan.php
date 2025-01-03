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
        <a class="navbar-brand" href="../data_wisata/data_pengunjung.php">
          <span class="text-success font-weight-bold">Peramalan</span>
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
                <i class="fa fa-database text-success"></i>
                <span class="nav-link-text">Data Pengunjung</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../forecasting/form_peramalan.php">
                <i class="fa fa-diagnoses text-success"></i>
                <span class="nav-link-text">Peramalan</span>
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
    <!-- Header -->
    <!-- Page content -->
    <div class="container-fluid bg-success">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-body d-flex justify-content-between">
              <?php
              include "./bobot.php"; ?>
              <div class="aditif">
                <h3 class="mb-0">Nilai Bobot</h3>
                <table border="0">
                  <tr>
                    <td>
                      <p class="text-sm mb-0">Alfa</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0">:</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0"><?php echo $alfa_a ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="text-sm mb-0">Beta</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0">:</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0"><?php echo $beta_a ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="text-sm mb-0">Gamma</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0">:</p>
                    </td>
                    <td>
                      <p class="text-sm mb-0"><?php echo $gamma_a ?></p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Proses Perhitungan
              </h3>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>PERIODE</th>
                    <th>PENGUNJUNG</th>
                    <th>AT-A</th>
                    <th>TT-A</th>
                    <th>ST-A</th>
                    <th>F-A</th>
                    <th>E-A</th>
                    <th>AT-M</th>
                    <th>TT-M</th>
                    <th>ST-M</th>
                    <th>F-M</th>
                    <th>E-M</th>
                  </tr>
                </thead>
                <tfoot class="thead-light">
                  <tr>
                    <th>PERIODE</th>
                    <th>PENGUNJUNG</th>
                    <th>AT-A</th>
                    <th>TT-A</th>
                    <th>ST-A</th>
                    <th>F-A</th>
                    <th>E-A</th>
                    <th>AT-M</th>
                    <th>TT-M</th>
                    <th>ST-M</th>
                    <th>F-M</th>
                    <th>E-M</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $no = 1;
                  $smoting = 0;
                  //inisialisasi level (AT)
                  $data = mysqli_query($koneksi, "SELECT AVG(jumlah_pengunjung) AS a FROM (SELECT * FROM tabel_kunjungan WHERE id_wisata = '$_GET[id_wisata]') AS kunjungan WHERE periode BETWEEN 1 AND 12;");
                  $at = mysqli_fetch_array($data);
                  //inisialisasi trend (TT)
                  $data = mysqli_query($koneksi, "SELECT SUM(jumlah_pengunjung) AS jumlah_musim1 FROM (SELECT * FROM tabel_kunjungan WHERE id_wisata = '$_GET[id_wisata]') AS kunjungan WHERE periode BETWEEN 1 AND 12");
                  $jumlah_musim1 = mysqli_fetch_array($data);
                  $data = mysqli_query($koneksi, "SELECT SUM(jumlah_pengunjung) AS jumlah_musim2 FROM (SELECT * FROM tabel_kunjungan WHERE id_wisata = '$_GET[id_wisata]') AS kunjungan WHERE periode BETWEEN 13 AND 24");
                  $jumlah_musim2 = mysqli_fetch_array($data);
                  $selisih = $jumlah_musim2['jumlah_musim2'] - $jumlah_musim1['jumlah_musim1'];
                  $data = mysqli_query($koneksi, "SELECT ($selisih) / POW (12, 2) AS tt");
                  $tt = mysqli_fetch_array($data);
                  //data pengunjung
                  $data = mysqli_query($koneksi, "SELECT periode, (jumlah_pengunjung) AS st FROM tabel_kunjungan WHERE id_wisata = '$_GET[id_wisata]' ORDER BY periode");
                  $baris = mysqli_num_rows($data);
                  while ($st = mysqli_fetch_array($data)) {
                  ?>
                    <tr>
                      <!--aditif-->
                      <td>
                        <?php
                        //periode
                        if ($st['periode'] <= 12) {
                          echo $no++;
                        } else {
                          $periode_ar[] = $no;
                          echo $no++;
                        } ?>
                      </td>
                      <td>
                        <?php
                        //pengunjung
                        if ($st['periode'] <= 12) {
                          echo number_format($st['st'], 2, ",", ".");
                        } else {
                          echo number_format($pengunjung = $st['st'], 2, ",", ".");
                          $pengunjung_ar[] = $pengunjung;
                        } ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] < 12) {
                          echo number_format(0, 2, ",", ".");
                        } elseif ($st['periode'] == 12) {
                          echo number_format($i_level = $at['a'], 2, ",", ".");
                          $level_ar[] = $i_level;
                        } else {
                          //smoting level (AT-A)
                          echo number_format($i_level = $alfa_a * ($st['st'] - $musim_ar[$smoting]) + (1 - $alfa_a) * ($level_ar[$smoting] + $trend_ar[$smoting]), 2, ",", ".");
                          $level_ar[] = $i_level;
                        } ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] < 12) {
                          echo number_format(0, 2, ",", ".");
                        } elseif ($st['periode'] == 12) {
                          echo number_format($i_trend = $tt['tt'], 2, ",", ".");
                          $trend_ar[] = $i_trend;
                        } else {
                          //smoting trend (TT-A)
                          echo number_format($i_trend = $beta_a * ($i_level - $level_ar[$smoting]) + (1 - $beta_a) * $trend_ar[$smoting], 2, ",", ".");
                          $trend_ar[] = $i_trend;
                        }; ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] <= 12) {
                          //inisialisasi musim (ST-A)
                          echo number_format($i_musim = $st['st'] - $at['a'], 2, ",", ".");
                          $musim_ar[] = $i_musim;
                        } else {
                          //smoting musim (ST-A)
                          echo number_format($i_musim = $gamma_a * ($st['st'] - $i_level) + (1 - $gamma_a) * $musim_ar[$smoting], 2, ",", ".");
                          $musim_ar[] = $i_musim;
                        } ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] > 12) {
                          //prediksi-A
                          echo number_format($i_prediksi = intval($level_ar[$smoting] + $trend_ar[$smoting] + $musim_ar[$smoting]), 2, ",", ".");
                          $prediksi_ar[] = $i_prediksi;
                        } else {
                          //inisialisasi prediksi-A
                          echo number_format(0, 2, ",", ".");
                        } ?>
                      </td>
                      <td>
                        <?php
                        //error-A
                        if ($st['periode'] > 12) {
                          echo number_format($error = $i_prediksi - $st['st'], 2, ",", ".");
                        } else {
                          echo number_format(0, 2, ",", ".");
                        } ?>
                      </td>
                      <?php
                      //abs rata" error-A
                      if ($st['periode'] > 12) {
                        $abs = abs($error) / ((abs($st['st']) + abs($i_prediksi)));
                        //echo number_format($abs = abs($error) / ((abs($st['st']) + abs($i_prediksi)) / 2), 2, ",", ".");
                        $jumlah_ar[] = $abs;
                      } else {
                        //echo number_format(0, 2, ",", ".");
                      }
                      ?>
                      <!--multiplikatif-->
                      <td>
                        <?php
                        if ($st['periode'] < 12) {
                          echo number_format(0, 2, ",", ".");
                        } elseif ($st['periode'] == 12) {
                          echo number_format($i_level_m = $at['a'], 2, ",", ".");
                          $level_m_ar[] = $i_level_m;
                        } else {
                          //smoting level (AT-M)
                          echo number_format($i_level_m = $alfa_m * ($st['st'] / $musim_m_ar[$smoting]) + (1 - $alfa_m) * ($level_m_ar[$smoting] + $trend_m_ar[$smoting]), 2, ",", ".");
                          $level_m_ar[] = $i_level_m;
                        } ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] < 12) {
                          echo number_format(0, 2, ",", ".");
                        } elseif ($st['periode'] == 12) {
                          echo number_format($i_trend_m = $tt['tt'], 2, ",", ".");
                          $trend_m_ar[] = $i_trend_m;
                        } else {
                          //smoting trend (TT-M)
                          echo number_format($i_trend_m = $beta_m * ($i_level_m - $level_m_ar[$smoting]) + (1 - $beta_m) * $trend_m_ar[$smoting], 2, ",", ".");
                          $trend_m_ar[] = $i_trend_m;
                        }; ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] <= 12) {
                          //inisialisasi musim (ST-M)
                          echo number_format($i_musim_m = $st['st'] / $at['a'], 2, ",", ".");
                          $musim_m_ar[] = $i_musim_m;
                        } else {
                          //smoting musim (ST-M)
                          echo number_format($i_musim_m = $gamma_m * ($st['st'] / $i_level_m) + (1 - $gamma_m) * $musim_m_ar[$smoting], 2, ",", ".");
                          $musim_m_ar[] = $i_musim_m;
                        } ?>
                      </td>
                      <td>
                        <?php
                        if ($st['periode'] > 12) {
                          //prediksi-M
                          echo number_format($i_prediksi_m = intval(($level_m_ar[$smoting] + $trend_m_ar[$smoting]) * $musim_m_ar[$smoting]), 2, ",", ".");
                          $prediksi_m_ar[] = $i_prediksi_m;
                          $smoting++;
                        } else {
                          //inisialisasi prediksi-M
                          echo number_format(0, 2, ",", ".");
                        } ?>
                      </td>
                      <td>
                        <?php
                        //error-M
                        if ($st['periode'] > 12) {
                          echo number_format($error_m = $i_prediksi_m - $st['st'], 2, ",", ".");
                        } else {
                          echo number_format(0, 2, ",", ".");
                        } ?>
                      </td>
                      <?php
                      //abs error-M
                      if ($st['periode'] > 12) {
                        $abs_m = abs($error_m) / ((abs($st['st']) + abs($i_prediksi_m)));
                        //echo number_format($abs_m = abs($error_m) / ((abs($st['st']) + abs($i_prediksi_m)) / 2), 2, ",", ".");
                        $jumlah_m_ar[] = $abs_m;
                      } else {
                        //echo number_format(0, 2, ",", ".");
                      }
                      ?>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Proses Perhitungan
              </h3>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="">
                <thead class="thead-light">
                  <tr>
                    <th>PERIODE</th>
                    <th>Prediksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $periode = $no++;
                  $no = 1;
                  while ($periode <= ($baris + 12)) {
                  ?>
                    <tr>
                      <td><?php echo $periode; ?></td>
                      <td><?php echo number_format(intval($i_level + $i_trend * ($no) + $musim_ar[($periode) - (1 + 12)]), 2, ",", "."); ?></td>
                      <!-- <td><?php echo number_format(intval(($i_level_m + $i_trend_m * ($no++)) * $musim_m_ar[($periode++) - (1 + 12)]), 2, ",", "."); ?></td> -->
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!--chart-->
      <div class="row">
        <div class="col">
          <div class="card bg-default">
            <div class="card-header bg-white">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-dark text-uppercase ls-1 mb-1">Grafik Prediksi</h6>
                  <h5 class="h3 text-dark mb-0">Kunjungan Wisata Jogja
                    <?php
                    if (isset($_GET['id_wisata'])) {
                      $data = mysqli_query($koneksi, "SELECT id_wisata, nama_wisata FROM tabel_wisata WHERE id_wisata = '$_GET[id_wisata]'");
                      $baris = mysqli_num_rows($data);
                      $wisata = mysqli_fetch_array($data);
                      echo $wisata['nama_wisata'];
                    } else {
                      echo 'Kosong';
                    } ?>
                  </h5>
                </div>
              </div>
            </div>
            <div class="card-body" style="background-color: #fff;">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="myChart" height="90%" class="chart-canvas" style="background-color: #fff;"></canvas>
              </div>
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
  <script src="../../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../../assets/vendor/chart.js/dist/Chart.extension.js"></script>
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
  <!--chart-->
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            gridLines: {
              lineWidth: 1,
              color: '#2F4F4F',
              zeroLineColor: '#2F4F4F'
            }
          }],
          xAxes: [{
            gridLines: {
              lineWidth: 0,
            }
          }]
        },
        plugins: {
          legend: {
            labels: {
              color: "#000", // Warna label legenda (opsional)
            }
          }
        },
      },
      data: {
        labels: [<?php $periode = array($periode_ar);
                  foreach ($periode[0] as $periode1) {
                    echo "$periode1" . ", ";
                  } ?>],
        datasets: [{
            label: 'Pengunjung',
            data: [<?php $pengunjung = array($pengunjung_ar);
                    foreach ($pengunjung[0] as $pengunjung1) {
                      echo "$pengunjung1" . ", ";
                    } ?>],
            borderColor: "#20c997",
            fill: false
          },
          {
            label: 'Peramalan',
            data: [<?php $prediksi_a = array($prediksi_ar);
                    foreach ($prediksi_a[0] as $prediksi_a1) {
                      echo round($prediksi_a1, 2) . ", ";
                    } ?>],
            borderColor: "#ffc107",
            fill: false
          }
        ]
      }
    });
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