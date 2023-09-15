<!DOCTYPE html>
<style>
 #my_camera{
     width: 500px;
     height: 400px;
     margin: auto;
     /* display: inline-block; */
     border-radius: 10px;
     object-fit: contain;
     
     border: 1px solid black;
}
</style>

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
  <title>Absen</title>
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
  <script type="text/javascript" src="<?php echo base_url()?>assets/webcamjs/webcam.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Leaflet
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css">
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

	<!-- Accurate Position Plugin -->
	<!-- <link rel="stylesheet" href="style.css">
	<script src="../Leaflet.AccuratePosition.js"></script> --> 

</head>

<body style="background-color: #e9ecef">
<!-- app capsule -->
<div class="appCapsule">
  <div class="section bg-primary" id="user-section">

  
    </div>


    
    <div class="section" id="menu-section">
      <div class="card">
        <div class="card-body mb-0">
            <div class="container" style="float:left;width: 50%">
            <h4>Selamat Siang</h4>
            <h4>Dendi Rizal Fauzi</h4>
            </div>
            <form id="absen">
            <div class="container text-right" style="float:right;width: 50%">
            <h4  ><?= date('D F Y')?></h4>
            <h4  ><?= date('H:i ')?></h4>
            </div>
            
            <input type="hidden" name="tanggalAbsen" id="tanggalAbsen" value="<?= date('Y-m-d')?>">
            <input type="hidden" name="jamAbsen" id="jamAbsen" value="<?= date('H:i:s A')?>">
            <input type="hidden" name="latlong" id="latlong" value="">
            <div class="row  d-flex justify-content-center">
              <p>Lat-Long:</p>
              <p id="coord"></p>
              </div>
            
          
            
          </div>
          <hr>
        </div>
        <div class="card">
            <div class="container border rounded ">
        <div id="my_camera" class="" >
            
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-success  btn-lg btn-block" onClick="take_snapshot()">Absen</button>
    
    </div>
    </div>
    
        </div>
        <div class="card">
        <div id="results" ></div>
        </div>
        </form>



      
    </div>
  </div>
    <!-- app capsule -->


<!-- App Bottom Menu -->

  <!-- * App Bottom Menu -->
</body>
</html>

<script language="JavaScript">
 Webcam.set({
     width: 498,
     height: 400,
     image_format: 'jpeg',
     jpeg_quality: 90,
     flip_horiz: true
 });
 Webcam.attach( '#my_camera' );
 function take_snapshot() {
 
 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
     // display results in page
     document.getElementById('results').innerHTML = 
      '<img id="gambarAbsen" src="'+data_uri+'"/>';
      saveSnap()

  } );
}
function saveSnap(){
   // Get base64 value from <img id='imageprev'> source
   var base64image = document.getElementById("gambarAbsen").src;

   Webcam.upload( base64image, 'upload.php', function(code, text) {
        console.log('Save successfully');
       //console.log(text);
   });

}
 </script>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
   if(!navigator.geolocation){
    console.log("Your browser doesn't support geolocation feature!")
  }else{
    navigator.geolocation.getCurrentPosition(getPosition)
  }

function getPosition(position){
      console.log(position);
      var lat =position.coords.latitude
      var long =position.coords.longitude
      console.log(lat)
      $(lat).text(lat)
      $(long).text(long)
      var latlong = lat+","+long;

      document.getElementById("coord").innerHTML = lat+","+long
      document.getElementById("latlong").value = latlong;
      // document.getElementById("long").innerHTML = "Longitude : "+long
      
    }

  $('#absen').on('submit', function (event) {
			event.preventDefault();
      
      
			var image = '';
			var tanggal = $('#tanggalAbsen').val();
			var jam = $('#jamAbsen').val();
      var latlong = $('#latlong').val();
			// var password = $('#password').val();
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo site_url("home/uploadAbsen");?>',
			  method: 'POST',
				dataType: 'json',
				data: {image: image, tanggal: tanggal, jam: jam, latlong: latlong},
			})
			.done(function(data) {
				if (data > 0) {
					alert('insert data sukses');
					$('#absen')[0].reset();
          // window.location.href = "<?php echo site_url('home/index'); ?>";
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			
		});

    
    
 </script>