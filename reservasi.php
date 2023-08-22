<?php 

include "server/koneksi.php";
include_once "winteresso/winteresso.php";

session_start();

if(!isset($_SESSION["username"])){
  header("location:login.php");
}




$usernamesession = $_SESSION['username'];
$datauser = "SELECT * FROM user WHERE username = '$usernamesession'";
$connectdatauser = mysqli_query($koneksi, $datauser);
while($takeuser = mysqli_fetch_array($connectdatauser)){
  $iduser = $takeuser['id_user'];
  $namalengkap = $takeuser['namalengkap'];
}

if(isset($_POST['submit'])){
  $jadwalreservasi = $_POST['jadwal'];
  $keluhan = $_POST['keluhan'];
  $jamreservasi = $_POST['jam'];
  $menitreservasi = $_POST['menit'];
  $nowa = $_POST['nowa'];

  if(!empty(trim($jadwalreservasi))){
    $cekjadwalserver = "SELECT * FROM reservasi";
    $connectserver = mysqli_query($koneksi, $cekjadwalserver);
    while($takeserver = mysqli_fetch_array($connectserver)){
      $jadwalconnect = $takeserver['jadwal_reservasi'];
      $jamreservasidb = $takeserver['jam_reservasi'];
      $menitreservasidb = $takeserver['menit_reservasi'];
    }
    if($jadwalreservasi != $jadwalconnect && $jamreservasi != $jamreservasidb && $menitreservasi != $menitreservasidb){
      if(!empty(trim($keluhan))){


        $sqlreservasi = "INSERT INTO reservasi set id_user = '$iduser', jadwal_reservasi = '$jadwalreservasi',nowa = '$nowa', keluhan = '$keluhan', jam_reservasi = '$jamreservasi', menit_reservasi = '$menitreservasi'";

        $connectreservasi = mysqli_query($koneksi, $sqlreservasi);
         if($connectreservasi){
            header("location:index.php");
            }
      }else{
        WIN_DIALOG("kolom keluhan tidak boleh kosong");
      }
    }else{
      WIN_DIALOG("Tanggal atau Jam reservasi telah dipilih pasien lain");
    }
  }else{
    WIN_DIALOG("Tentukan jadwal reservasi");
  }

  
 

}



 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Reservasi</title>
  </head>
  <body>


    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">RESERVASI</h1>
    </div>
   


    <div style="display: flex; justify-content: center; margin-top: 50px;">

    <form method="POST" action="">

      <!-- nama lengkap input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nama lengkap</label>
        <input type="text" value="<?php echo $namalengkap; ?>" id="form4Example1" style="pointer-events: none;" class="form-control" disabled />
      </div>

      <!-- nomor whatsapp input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nomor whatsapp aktif</label>
        <input type="text" name="nowa" id="form4Example1" class="form-control"/>
      </div>


      <!-- reservasi input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Tanggal reservasi</label>
        <input type="date" name="jadwal" id="form4Example1" class="form-control" />
      </div>

      <!-- jam input -->
      <div style="display: flex; flex-direction: row; align-items: center; margin-bottom: 10px;">
        <label style="margin-right: 5px;">Jam</label>
        <select name="jam">
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>

        <div style="margin-left: 5px; margin-right: 5px;"> : </div>

        <select name="menit">
          <option value="00">00</option>
          <option value="15">15</option>
          <option value="30">30</option>
          <option value="45">45</option>
        </select>
      </div>


      <!-- Message input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Keluhan</label>
        <textarea class="form-control" name="keluhan" id="form4Example3" rows="4"></textarea>
      </div>


      <!-- Submit button -->
      <input type="submit" name="submit" value="reservasi" class="btn btn-primary btn-block mb-4" style="width: 100%;" />

    </form>

    </div>



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



  <br> <br> <br> <br> <br> <br> <br>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>