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
        <div class="section-title">Cari Data</div>
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
                        <input type="text" name="end_date" class="form-control datepicker end_date" value="'.tanggal_ind($date).'" autocomplete="off">
                        <div class="input-group-addon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-sm-4 col-md-4 text-center">
           <button type="button" class="btn btn-sm btn-success mt-1 ml-1 btn-sortir"><ion-icon name="checkmark-outline"></ion-icon> Filter</button>
           <button type="button" class="btn btn-sm btn-info mt-1 ml-1" data-toggle="modal" data-target="#modal-print"><ion-icon name="print-outline"></ion-icon> Cetak</button>
           <button type="button" class="btn btn-sm btn-danger mt-1 ml-1 btn-clear"><ion-icon name="repeat-outline"></ion-icon> Clear</button>
        </div>

        </div>       
    </div>
    </div>
    </div>
  </div>
    <!-- App Capsule -->
    <div id="appCapsule">
    <div class="section mt-2">
    <div class="section-title">Cari Data</div>
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
                        <input type="text" name="end_date" class="form-control datepicker end_date" value="'.tanggal_ind($date).'" autocomplete="off">
                        <div class="input-group-addon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                    </div>

                </div>
            </div> 
        </div>
        <div class="col-sm-4 col-md-4 text-center">
           <button type="button" class="btn btn-sm btn-success mt-1 ml-1 btn-sortir"><ion-icon name="checkmark-outline"></ion-icon> Filter</button>
           <button type="button" class="btn btn-sm btn-info mt-1 ml-1" data-toggle="modal" data-target="#modal-print"><ion-icon name="print-outline"></ion-icon> Cetak</button>
           <button type="button" class="btn btn-sm btn-danger mt-1 ml-1 btn-clear"><ion-icon name="repeat-outline"></ion-icon> Clear</button>
        </div>

        </div>       
    </div>
    </div>
    </div>

    <div class="section mt-2 mb-2">
        <div class="section-title">Data History Absensi</div>
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

        <!-- MODAL EXPLORE -->
        <div class="modal fade action-sheet inset" id="modal-print" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cetak / Explore</h5>
                        <a href="javascript:void(0);" class="close" style="position: absolute;right:15px;top: 10px;"  data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Pilih Tipe</label>
                                    <select class="form-control custom-select type" name="type" required>
                                       <option value="pdf">PDF</option>
                                       <option value="excel">EXCEL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-success btn-block btn-lg mt-2 btn-print"><ion-icon name="print-outline"></ion-icon> Cetak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- UPDATE ABSENSI  -->
        <div class="modal fade action-sheet inset" id="modal-show" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" style="z-index:10000">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Absen Tanggal <span class="status-date badge badge-success"></span></h5>
                        <a href="javascript:void(0);" class="close" style="position: absolute;right:15px;top: 10px;"  data-dismiss="modal" aria-hidden="true"><ion-icon name="close-outline"></ion-icon></a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">

                            <form id="update-history">
                                <input type="hidden" name="presence_id" id="presence_id" readonly>

                                <!--<div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">Jam Masuk</label>
                                        <input type="text" class="form-control" id="timein" name="time_in" value="" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                    <span class="small">Format jam ex: 07:30</span>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">Jam Pulang</label>
                                        <input type="text" class="form-control" name="time_out" id="timeout" value="" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                    <span class="small">Format jam ex: 17:00</span>
                                </div>-->


                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">Kehadiran</label>
                                        <select class="form-control custom-select" name="present_id" id="status" required>';
                                            $query="SELECT * from present_status order by present_name ASC";
                                              $result = $connection->query($query);
                                              while($row = $result->fetch_assoc()) { 
                                              echo'<option value="'.$row['present_id'].'">'.$row['present_name'].'</option>';
                                              }echo'
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Keterangan</label>
                                    <div class="input-wrapper">
                                    <textarea id="information" rows="2" class="form-control" name="information" placeholder="Keterangan"></textarea>
                                    </div>
                                    <span class="small">Kosongkan jika tidak memberi keterangan</span>
                                </div>

                                <div class="form-group basic">
                                    <button type="submit" class="btn btn-danger btn-block btn-lg">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * END UPDATE ABSENSI -->

</div>
    


<!-- App Bottom Menu -->

  <!-- * App Bottom Menu -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>