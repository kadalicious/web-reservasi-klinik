<?php 

include "server/koneksi.php";

session_start();

if(!isset($_SESSION["username"])){
  header("location:login.php");
}

$usernamesession = $_SESSION['username'];
$datauser = "SELECT * FROM user WHERE username = '$usernamesession'";
$connectdatauser = mysqli_query($koneksi, $datauser);
while($takeuser = mysqli_fetch_array($connectdatauser)){
  $iduser = $takeuser['id_user'];
  
}

$cekdatareservasi = "SELECT * FROM reservasi WHERE id_user = '$iduser'";

$connectcekdatareservasi = mysqli_query($koneksi, $cekdatareservasi);

while($takedatareservasi = mysqli_fetch_array($connectcekdatareservasi)){
  $idreservasi = $takedatareservasi['id_reservasi'];
  $jadwalreservasi = $takedatareservasi['jadwal_reservasi'];
  $nowa = $takedatareservasi['nowa'];
  $keluhan = $takedatareservasi['keluhan'];
  $jamreservasi = $takedatareservasi['jam_reservasi'];
  $menitreservasi = $takedatareservasi['menit_reservasi'];

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

    <!-- open bread -->
    <div style="display: flex; margin-top: 10px; margin-left: 10px;">
      <p style="font-weight: bolder; background-color: #E6E6FA; padding: 10px; border-radius: 5px;"><a href="index.php" style="text-decoration: none; color: black;">Home</a> / Jadwal reservasi</p>
    </div>
    <!-- close bread -->


    <!-- open back -->
      <div style="margin-top: 10px; margin-left: 10px;">
        <button onclick="window.location.href='index.php'" style="outline: none; border:none; background-color: white;"><img src="img/backarrow2.svg" style="width: 50px; height: 50px;"></button>
      </div>
    <!-- close back -->


    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">JADWAL RESERVASI</h1>
    </div>
   


    <div style="display: flex; justify-content: center; margin-top: 50px; flex-direction: column;">


      <div style="margin-left: 200px; margin-right: 200px;"> 


      <!-- nama lengkap input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Jadwal Reservasi</label>
        <input type="text" value="<?php echo $jadwalreservasi; ?>" id="form4Example1" style="pointer-events: none; text-align: center;" class="form-control" disabled />
      </div>

      <!-- nomor whatsapp input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nomor Whatsapp</label>
        <input type="text" id="form4Example1" value="<?php echo $nowa; ?>" class="form-control" disabled style="pointer-events: none; text-align: center;"/>
      </div>


      <!-- reservasi input -->
      <div class="form-outline mb-4">
        <div style="display: flex; flex-direction: column; justify-content: center;">
          <label class="form-label" for="form4Example1">Keluhan</label>
          <textarea style="pointer-events: none; width: 100%; height: 200px;" disabled><?php echo $keluhan; ?></textarea>
        </div>
      </div>


      <!-- Message input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Jam reservasi</label>
        <input type="text" name="jadwal" value="<?php echo $jamreservasi; ?> : <?php echo $menitreservasi; ?>"  id="form4Example1" class="form-control" disabled style="pointer-events: none; text-align: center;"/>
      </div>


      <!-- edit button -->
      <button onclick="window.location.href='editreservasi.php?idreservasi=<?php echo $idreservasi; ?>'" style="width: 100%; background-color: green; font-weight: bolder; color: white; border: none; padding: 10px; border-radius: 5px;">Edit reservasi</button> 

      <!-- cancel button -->
      <button onclick="window.location.href='deletereservasi.php?idreservasi=<?php echo $idreservasi; ?>'" style="width: 100%; background-color: red; font-weight: bolder; color: white; border: none; padding: 10px; border-radius: 5px; margin-top: 10px;">Batalkan reservasi</button> 



      </div>

    </div>




  <br> <br> <br> <br> 

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>