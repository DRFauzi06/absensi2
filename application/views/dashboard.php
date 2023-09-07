<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="theme-color" content="#000000" />
  <title>Dashboard</title>
  <meta name="description" content="Mobilekit HTML Mobile UI Kit" />
  <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/logo_postra.png" sizes="32x32" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.theme.default.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap" />
  <script src="https://kit.fontawesome.com/2b1f5def9b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
</head>

<body style="background-color: #e9ecef">
  <!-- loader -->
  <!-- <div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
  </div> -->
  <!-- * loader -->

  <!-- App Capsule -->
  <div id="appCapsule">
    <div class="section bg-primary" id="user-section">
    <?= $this->session->flashdata('message') ?>
      <div id="user-detail">
        <div class="avatar">
          <img src="<?= base_url()?>assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded" />
        </div>
        <div id="user-info">
          <h2 id="user-name">Dendi</h2>
          <span id="user-role">Postrix</span>
        </div>
      </div>
    </div>

    <div class="section" id="menu-section">
      <div class="card">
        <div class="card-body text-center">
          <div class="list-menu">
            <div class="item-menu text-center">
              <div class="menu-icon">
                <a href="<?= base_url('home/profile'); ?>" class="green" style="font-size: 40px"><i class="fas fa-user"></i>
                </a>
              </div>
              <div class="menu-name">
                <span class="text-center">Profil</span>
              </div>
            </div>
            <div class="item-menu text-center">
              <div class="menu-icon">
                <a href="<?php echo site_url("home/izin"); ?>" class="orange" style="font-size: 40px">
                <i class="fa-regular fa-file"></i>
                </a>
              </div>
              <div class="menu-name">Izin</div>
            </div>
            <div class="item-menu text-center">
              <div class="menu-icon">
                <a href="<?= base_url("home/cuti"); ?>" class="danger" style="font-size: 40px">
                  <i class="fas fa-calendar-alt"></i>
                </a>
              </div>
              <div class="menu-name">
                <span class="text-center">Cuti</span>
              </div>
            </div>
            <div class="item-menu text-center">
              <div class="menu-icon">
                <a href="<?php echo site_url("home/history"); ?>" class="warning" style="font-size: 40px">
                  <i class="fas fa-file-alt"></i>
                </a>
              </div>
              <div class="menu-name">
                <span class="text-center">Histori</span>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="section mt-2" id="presence-section">
      <div class="todaypresence">
        <div class="row">
          <div class="col-6">
            <div class="card bg-success">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence">
                    <i class="fas fa-clock"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="presencetitle">Masuk</h4>
                    <span>08:00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card bg-danger">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence">
                    <i class="fas fa-clock"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="presencetitle">Pulang</h4>
                    <span>17:00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="rekappresence mt-1">

        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence primary">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="rekappresencetitle">Hadir</h4>
                    <span class="rekappresencedetail">0 Hari</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence green">
                    <i class="fas fa-info"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="rekappresencetitle">Izin</h4>
                    <span class="rekappresencedetail">0 Hari</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-1">
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence danger">
                    <i class="fas fa-sad-tear"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="rekappresencetitle">Sakit</h4>
                    <span class="rekappresencedetail">0 Hari</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <div class="presencecontent">
                  <div class="iconpresence warning">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="presencedetail">
                    <h4 class="rekappresencetitle">Terlambat</h4>
                    <span class="rekappresencedetail">0 Hari</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="presencetab mt-2">
        <div class="tab-pane fade show active" id="pilled" role="tabpanel">
          <ul class="nav nav-tabs style1" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                Bulan Ini
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                Leaderboard
              </a>
            </li>
          </ul>
        </div>
        <div class="tab-content mt-2" style="margin-bottom: 100px">
          <div class="tab-pane fade show active" id="home" role="tabpanel">
            <ul class="listview image-listview">
              <li>
                <div class="item">
                  <div class="icon-box bg-primary">
                    <i class="fas fa-image"></i>
                  </div>
                  <div class="in">
                    <div>Photos</div>
                    <span class="badge badge-danger">10</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="icon-box bg-secondary">
                    <i class="fas fa-photo-video"></i>
                  </div>
                  <div class="in">
                    <div>Videos</div>
                    <span class="text-muted">None</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="icon-box bg-danger">
                    <i class="fas fa-music"></i>
                  </div>
                  <div class="in">
                    <div>Music</div>
                  </div>
                </div>
              </li>


            </ul>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel">
            <ul class="listview image-listview">
              <li>
                <div class="item">
                  <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                  <div class="in">
                    <div>Edward Lindgren</div>
                    <span class="text-muted">Designer</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                  <div class="in">
                    <div>Emelda Scandroot</div>
                    <span class="badge badge-primary">3</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                  <div class="in">
                    <div>Henry Bove</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                  <div class="in">
                    <div>Henry Bove</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                  <div class="in">
                    <div>Henry Bove</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- * App Capsule -->

  

  <!-- ///////////// Js Files ////////////////////  -->
  <!-- Jquery -->
  <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap-->
  <script src="assets/js/lib/popper.min.js"></script>
  <script src="assets/js/lib/bootstrap.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/chart/dist/chart.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <!-- Owl Carousel -->
  <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
  <!-- jQuery Circle Progress -->
  <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <!-- Base Js File -->
  <script src="assets/js/base.js"></script>

  <script>
    
  </script>
</body>

</html>