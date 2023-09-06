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
  <title>Profile</title>
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


<div class="appCapsule">
  
  
  <div class="section bg-primary" id="user-section">

  <div id="user-detail" class="d-flex justify-content-center">
        <!-- <div class="avatar"> -->
          <div class="avatar-section">
            
        
        <a href="">
        <input type="file" class="upload" name="file" id="avatar" accept=".jpg, .jpeg, ,gif, .png" capture="camera">
          <img src="<?= base_url()?>assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w100 rounded" />
          <span class="button bg-white text-dark">
          <i class="fa-solid fa-camera"></i>
                    </span>
                    </a>
          </div>  
        <!-- </div> -->
        <div id="user-info">
          <h2 id="user-name">Dendi</h2>
          <span id="user-role">Postrix</span>
        </div>
      </div>
    </div>

    <!-- detail pegawai -->
    <div class="section mt-2 mb-5">
      <div class="section-title d-flex justify-content-center">
        Profile
      </div>
      <div class="card">
        <div class="card-body">
          <div class="input-wrapper">
            <label class="label" for="kodePegawai">Kode Pegawai</label>
            <input type="text" class="form-control" name="kodePegawai" required disabled="true">
          </div>
          <div class="input-wrapper">
            <label class="label" for="namaPegawai">Nama Pegawai</label>
            <input type="text" class="form-control" name="namaPegawai" required disabled="true">
          </div>
          <div class="input-wrapper">
            <label class="label" for="lokasiPegawai">Lokasi Kerja</label>
            <input type="text" class="form-control" name="lokasiPegawai" required disabled="true">
          </div>
        </div>
      </div>
      <!-- detail pegawai -->

      <!-- ganti Password -->

      <form action="">
      <div class="section-title d-flex justify-content-center">Password</div>
      <div class="card">
        <div class="card-body">
          <div class="input-wrapper">
            <label class="label" for="emailPegawai">Email</label>
            <input type="text" class="form-control" name="emailPegawai" required disabled="true">
          </div>
          
          <div class="input-wrapper">
            <label class="label" for="passwordBaru">Password Baru</label>
            <input type="text" class="form-control" name="passwordBaru" required disabled="true">
          </div>
          <hr>
          <div class="container d-flex justify-content-center">
          <button type="submit" class="btn btn-success mr-1 btn-lg btn-block">Submit</button>
          </div>
        </div>
      </div>
      
      </form>
    </div>

    <!-- ganti password -->
 
    

    
    


    

  

  </div>
    
    


<!-- App Bottom Menu -->

  <!-- * App Bottom Menu -->
</body>
</html>