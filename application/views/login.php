<!DOCTYPE html>
<html lang="en">

<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/logo_postra.png" sizes="32x32" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.theme.default.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap" />
  <script src="https://kit.fontawesome.com/2b1f5def9b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAPOS Login</title>

</head>
<body style="background-color: #e9ecef">

<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Login</h2>
                <form action="<?php echo site_url('home/index'); ?>">
                <!-- <form> -->
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="emailUser">Email</label>
    <input type="email" id="emailUser" class="form-control" placeholder="Email anda" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="emailUser">Password</label>
    <input type="password" id="emailUser" class="form-control" placeholder="Password anda" />
    
  </div>


  <!-- Submit button -->
  <a href="<?php echo site_url('home/dashboard'); ?>"></a>
  <button type="submit" class="btn btn-primary btn-block mb-4">Masuk</button>
  <div class="row mb-4">
    <div class="col">
      <!-- Checkbox -->
      <a href="<?php echo site_url('login/register'); ?>">
      <p>Daftar</p>
      </a> 
      

    </div>

    <div class="col text-right">
      <!-- Simple link -->
      <a href="#!">Lupa Password</a>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</section>

    
</body>
</html>