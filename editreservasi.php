<?php 

include "server/koneksi.php";

session_start();

/*
if(!isset($_SESSION['username'])){
  header("location:login.php");
}
*/


$getidreservasi = $_GET['idreservasi'];
$checkdatareservasi = "SELECT * FROM reservasi WHERE id_reservasi = '$getidreservasi'";
$connectreservasi = mysqli_query($koneksi, $checkdatareservasi);
while($takedatareservasi = mysqli_fetch_array($connectreservasi)){
  $jadwalreservasidb = $takedatareservasi['jadwal_reservasi'];
  $keluhandb = $takedatareservasi['keluhan'];
  $jamreservasidb = $takedatareservasi['jam_reservasi'];
  $menitreservasidb = $takedatareservasi['menit_reservasi'];

}

$checkdataall = "SELECT * FROM reservasi";
$connectcheckdataall = mysqli_query($koneksi, $checkdataall);
while($takedataall = mysqli_fetch_array($connectcheckdataall)){
  $jadwalreservasiall = $takedataall['jadwal_reservasi'];
  $jam_reservasi = $takedataall['jam_reservasi'];
  $menit_reservasi = $takedataall['menit_reservasi'];
}


if(isset($_POST['submit'])){
  $tanggalreservasi = $_POST['tanggalreservasi'];
  $jam = $_POST['$jam'];
  $menit = $_POST['menit'];
  $keluhan = $_POST['$keluhan'];



  if($tanggalreservasi != $jadwalreservasiall && $jam != $jam_reservasi && $menit != $menit_reservasi){
      $updatedatareservasi = "UPDATE reservasi set jadwal_reservasi = '$tanggalreservasi',keluhan = '$keluhan' ,jam_reservasi = '$jam' WHERE id_reservasi = '$getidreservasi'";
      $connectupdatereservasi = mysqli_query($koneksi, $updatedatareservasi);
      if($connectupdatereservasi){
      header("location:dashboard.php?idreservasi=$getidreservasi");
  }
  }else{
    ?>
    <script type="text/javascript">
      alert("tanggal yang dipilih telah didaftarkan oleh pengguna lain");
    </script>
    <?php  
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

    <title>Edit</title>
  </head>
  <body>

     <!-- open back -->
      <div style="margin-top: 10px; margin-left: 10px;">
        <button onclick="history.back()" style="outline: none; border:none; background-color: white;"><img src="img/backarrow2.svg" style="width: 50px; height: 50px;"></button>
      </div>
    <!-- close back -->
  

    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">Edit data reservasi</h1>
    </div>


    <div style="display: flex; justify-content: center;margin-left: 50px; margin-right: 50px; margin-top: 50px;">


    <form method="POST" action="">

      <!-- tanggal reservasi -->
      <div class="form-outline mb-4">

        <!-- Edit tanggal reservasi -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example1">Tanggal reservasi</label>
          <input type="date" name="jadwal" id="form4Example1" class="form-control" />
        </div>

        <label class="form-label" for="form4Example1">Tanggal reservasi (<span style="color: red;">Current</span>)</label>
        <input type="text" name="tanggalreservasi" value="<?php echo $jadwalreservasidb; ?>" id="form2Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>


      

      <!-- jam -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Edit jam reservasi</label>
            <div style="display: flex; flex-direction: row; align-items: center; margin-bottom: 10px;">
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
        <label class="form-label" for="form2Example2">Jam (<span style="color: red;">Current</span>)</label>
        <input type="text" value="<?php echo $jamreservasidb ?> : <?php echo $menitreservasidb; ?>" id="form2Example2" class="form-control" disabled style="pointer-events: none;"/>
      </div>


      <!-- keluhan -->
      <div class="form-outline mb-4">
        <div style="display: flex; flex-direction: column;">
          <label class="form-label" for="form2Example2">Keluhan</label>
          <textarea name="keluhan"><?php echo  $keluhandb; ?></textarea>
        </div>
      </div>


      <!-- Submit button -->
      <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-primary" style="width: 100%; "/>

    </form>


    </div>







    <br><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>