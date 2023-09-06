<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="theme-color" content="#000000" />
  <title>History</title>
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
<!-- app capsule -->
<div class="appCapsule">
  <div class="section bg-primary" id="user-section">

  

    
  </div>


  <div class="section mt-2" >
    <div class="section-title d-flex justify-content-center">
        Cari Data
      </div>
      <div class="card">
        <div class="card-body">
        <div class="row text-center">
        <div class="col-sm-4 col-md-4">
        <div class="form-group basic">
                <div class="input-wrapper">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker start_date" name="start_date" placeholder="Tanggal Awal" autocomplete="off" required>
                        <div class="input-group-addon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-sm-4  col-md-4">
            <div class="form-group basic">
                <div class="input-wrapper">
                    <div class="input-group">
                        <input type="text" name="end_date" class="form-control datepicker end_date" placeholder="Tanggal Akhir" autocomplete="off">
                        <div class="input-group-addon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>

                </div>
            </div> 
        </div>
        <div class="col-sm-4 col-md-4 text-center">
           <button type="button" class="btn btn-sm btn-success mt-1 ml-1 btn-sortir"><i class="fa-solid fa-filter fa-xl"></i> </button>
           <button type="button" class="btn btn-sm btn-info mt-1 ml-1" data-toggle="modal" data-target="#modal-print"><i class="fa-solid fa-print fa-xl"></i></button>
           <button type="button" class="btn btn-sm btn-danger mt-1 ml-1 btn-clear"><i class="fa-solid fa-rotate-left fa-xl"></i></button>
        </div>


        </div>
      </div>
      </div>
    </div>
    <div class="section mt-2 mb-2">
        <div class="section-title d-flex justify-content-center">Data History Absensi</div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive loaddata"></div>
            </div>
        </div>
    </div>    

    <div class="section mt-2 mb-2">        
        <div class="alert alert-outline-dark">
            <span class="">Untuk melihat foto absen silahkan klik pada waktu masuk pulang</span>
        </div>
    </div>
        
</div>

    <!-- app capsule -->

    


<!-- App Bottom Menu -->

  <!-- * App Bottom Menu -->
</body>
</html>