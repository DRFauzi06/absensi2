<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/logo_postra.png" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/bootstrap/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/inc/owl-carousel/owl.theme.default.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap" />
  <script src="https://kit.fontawesome.com/2b1f5def9b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
</head>
<body style="background-color: #e9ecef">

<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Daftar</h2>

              <form action="<?php echo site_url('home/index'); ?>">

                <div class="form-outline-sm mb-4">
                <label class="form-label" for="form3Example1cg">ID</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Nama</label>
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Email</label>
                  <input type="email" id="form3Example4cg" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="">Jabatan</label>
                <select class="form-select " aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="">Jam kerja</label>
                <select class="form-select " aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="">Lokasi</label>
                <select class="form-select " aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4c">Password</label>
                  <input type="password" id="form3Example4c" class="form-control form-control-lg" />
                  
                </div>

                

                
  <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
  
  <div class="row mb-4">
    

                <p class="text-center text-muted mt-5 mb-0">Sudah punya akun? <a href="#!"
                    class="fw-bold text-body"><u>Login disini</u></a></p>

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