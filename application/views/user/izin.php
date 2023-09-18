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
  <title>Izin</title>
  <meta name="description" content="Mobilekit HTML Mobile UI Kit" />
  <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" sizes="32x32" />
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

  <div id="user-detail">
        <div class="avatar">
          <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded" />
        </div>
        <div id="user-info">
          <h2 id="user-name">Dendi</h2>
          <span id="user-role">Postrix</span>
        </div>
      </div>
    </div>

    <div class="section mt-2" id="presence-section">
    <div class="section mt-2">
    <div class="card">
    <div class="card-body">
        <div class="row text-center">
        <div class="col-sm-4 col-md-4">
            <div class="form-group basic">
                <div class="input-wrapper">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker start_date" name="start_date" placeholder="Tanggal Awal" required>
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
                        <input type="text" name="end_date" class="form-control datepicker end_date" value="'.tanggal_ind($date).'">
                        <div class="input-group-addon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>

                </div>
            </div> 
        </div>
        <div class="col-sm-4 col-md-4 text-center">
           <button type="button" class="btn btn-sm btn-success mt-1 ml-1 btn-sortir-izin"><i class="fa fa-filter"></i></button>
           <button type="button" class="btn btn-sm btn-warning mt-1 ml-1 btn-clear-izin"><i class="fa fa-retweet"></i> Clear</button>
           <button type="button" class="btn btn-sm btn-primary mt-1 ml-1" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus-square"></i> Tambah</button>
        </div>

        </div>       
    </div>
    </div>
    <div class="section mt-2">
            <div class="section-title">Data Pengajuan Izin</div>
            <div class="card">
                <div class="transactions">
                    <div class="loaddataIzin"></div>
                </div>
            </div>
        </div> 
        
    <!-- MODAL ADD -->
    <div class="modal fade" id="modal-add" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Pengajuan Izin</h5>
                        <a href="javascript:;" data-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form-add-izin" action="<?= base_url('home/addIzin') ?>" autocomplete="off">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Nama</label>
                                    <input type="text" class="form-control" name="permission_name" value="<?php $detailProfile['nama_karyawan'] ?>" readonly required>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Mulai</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control datepicker" name="permission_date" placeholder="'.tanggal_ind($date).'" value="" required>
                                            <div class="input-group-addon">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                             <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Selesai</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control datepicker" name="permission_date_finish" placeholder="tanggal" value="" required>
                                            <div class="input-group-addon">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group basic mb-2">
                                <div class="input-wrapper">
                                    <label class="label">Status</label>
                                    <select class="form-control custom-select" name="type" required>
                                        <option value="">Pilih status:</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Dinas Luar Kota">Dinas Luar Kota</option>
                                        <option value="Dinas Dalam Kota">Dinas Dalam Kota</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic-boxed">
                                <div class="input-wrapper mb-1">
                                    <label class="label">Upload</label>
                                    <input type="file" class="form-control" enctype="multipart/form-data" name="files" accept=".jpg, .jpeg, .pdf, .docx, .docm" required>
                                </div>
                                    <span class="small text-danger">Silahkan upload file, Pasikan Surat yang di Upload dengan Format harus JPG/JPEG, DOC atau PDF</span>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Keterangan</label>
                                   <textarea rows="3" class="form-control permission_description" name="permission_description" required></textarea>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="submit" class="btn btn-success btn-block btn-lg mt-2">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT -->
        <div class="modal fade modalbox" id="modal-edit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Permohonan Izin</h5>
                        <a href="javascript:;" data-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body">
                        <form class="form-edit-izin" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="" required>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="permission_name" value="" required>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Tanggal</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker"  id="date" name="permission_date" required>
                                            <div class="input-group-addon">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                            </div>


                            <br>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Upload</label>
                                    <input type="file" class="form-control" name="files" accept=".jpg, .jpeg, .pdf, .docx, .docm">
                                </div>
                                <span class="small text-danger">Pasikan Surat yang di Upload dengan Format harus JPG, JPEG dan PDF</span>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Keterangan</label>
                                   <textarea rows="3" class="form-control permission_description" id="description" name="permission_description" required></textarea>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="submit" class="btn btn-danger btn-block btn-lg mt-2">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <!-- app capsule -->


<!-- App Bottom Menu -->

  <!-- * App Bottom Menu -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>