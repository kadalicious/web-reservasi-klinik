<?php 

include 'server/koneksi.php';

session_start();

$usernamesession = $_SESSION['username'];

 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Klinik gigi Nadya</title>

    <link rel="icon" type="image/x-icon" href="img/logokliniknadya.jpg">


   
    <style type="text/css">
      *{
        margin: 0px;
        padding: 0px;
      }
    

    

    </style>
   
  </head>
  <body>
   

    <?php 

    if($usernamesession == true){
      include_once "view/afterlogin.php";
    }else{
      include_once "view/beforelogin.php";
    }

     ?>



  
     
     


    <!-- jadwal yang sudah dibooking -->

    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h3 style="font-weight: bolder;">Jadwal reservasi yang telah terjadwal</h3>
    </div>

    <div style="display: flex; justify-content: center; margin-left: 200px; margin-right: 200px;">

    <table class="table">
      <thead style="text-align: center;">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal reservasi</th>
          <th scope="col">Jam</th>
        </tr>
      </thead>
      <tbody style="text-align: center;">
        <?php 

         $cekbooking = "SELECT * FROM reservasi";
         $conncekbooking = mysqli_query($koneksi, $cekbooking);
         while($databooking = mysqli_fetch_array($conncekbooking)){
          $idreservasi = $databooking['id_reservasi'];
          $iduser = $databooking['id_user'];
          $jadwalreservasi = $databooking['jadwal_reservasi'];
          $jam = $databooking['jam_reservasi'];
          $menit = $databooking['menit_reservasi'];
          $keluhan = $databooking['keluhan'];

          $datauser = "SELECT * FROM user WHERE id_user = '$iduser'";
          $conndatauser = mysqli_query($koneksi, $datauser);
          while($takedatuser = mysqli_fetch_array($conndatauser)){
            $namalengkap = $takedatuser['namalengkap'];
            $nohp = $takedatuser['nohp'];
            $jeniskelamin = $takedatuser['jeniskelamin'];
          }
          ?>

          <tr>
            <th scope="row"><?php echo $namalengkap; ?></th>
            <td ><?php echo $jadwalreservasi; ?></td>
            <td ><?php echo $jam; ?> : <?php echo $menit; ?></td>
          </tr>

          <?php 
         } 
          ?>
        
      </tbody>
    </table>

    </div>
 
    <!-- jadwal yang sudah dibooking -->

    






  <br><br><br><br><br><br><br><br><br><br><br>



  <!-- open footer -->
  <div class="container" style="left: 0; right: 0; bottom: 0;">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5 style="color: #0099ff; font-weight: bolder;">Tentang kami</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Profil klinik</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tim dokter</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lokasi(Gmaps)</a></li>
          </ul>
        </div>

        <div class="col-2">
          <h5 style="color: #0099ff; font-weight: bolder;">Layanan</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Veneer</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Perawatan Saluran Akar</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tambal Gigi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cabut Gigi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Scalling</a></li>
          </ul>
        </div>


        <div class="col-4 offset-1">
          <form>
            <h5 style="color: #0099ff; font-weight: bolder;">WAKTU OPERASIONAL</h5>
            <div class="d-flex w-100 gap-2" style="display: flex; flex-direction: column;">
              <p style="font-weight: bolder;">Senin s/d Jumat</p>
              <p style="font-weight: bolder;">08.00 - 21.00 WIB</p>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2023 Klinik Gigi Nadya.</p>
      </div>
    </footer>
  </div>

  <!-- close footer -->














  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>