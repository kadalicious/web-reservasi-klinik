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
  $namalengkap = $takeuser['namalengkap'];
  $nohp = $takeuser['nohp'];
  $jeniskelamin = $takeuser['jeniskelamin'];
  $alamat = $takeuser['alamat'];
  $pekerjaan = $takeuser['pekerjaan'];
  $agama = $takeuser['agama'];
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
      <p style="font-weight: bolder; background-color: #E6E6FA; padding: 10px; border-radius: 5px;"><a href="index.php" style="text-decoration: none; color: black;">Home</a> / Profil</p>
    </div>
    <!-- close bread -->
    


    <!-- open back -->
      <div style="margin-top: 10px; margin-left: 10px;">
        <button onclick="window.location.href='index.php'" style="outline: none; border:none; background-color: white;"><img src="img/backarrow2.svg" style="width: 50px; height: 50px;"></button>
      </div>
    <!-- close back -->



    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">Profil User</h1>
    </div>
   


    <div style="display: flex; justify-content: center; margin-top: 50px; flex-direction: column;">


      <div style="margin-left: 100px; margin-right: 100px;">
        
      
      <!-- nama lengkap input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nama lengkap</label>
        <input type="text" value="<?php echo $namalengkap; ?>" id="form4Example1" style="pointer-events: none;" class="form-control" disabled />
      </div>

      <!-- nomor telepon -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nomor Telepon</label>
        <input type="text" name="nohp" value="<?php echo $nohp; ?>" id="form4Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>


      <!-- jenis kelamin -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Jenis Kelamin</label>
        <input type="text" name="jeniskelamin" value="<?php echo $jeniskelamin; ?>" id="form4Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>

      <!-- alamat -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Alamat</label>
        <input type="text" name="alamat" value="<?php echo $alamat; ?>" id="form4Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>

      <!-- pekerjaan -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Pekerjaan</label>
        <input type="text" name="alamat" value="<?php echo $pekerjaan; ?>" id="form4Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>

      <!-- agama -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Agama</label>
        <input type="text" name="alamat" value="<?php echo $agama; ?>" id="form4Example1" class="form-control" disabled style="pointer-events: none;"/>
      </div>


      <!-- edit button -->
      <button onclick="window.location.href='editprofil.php?iduser=<?php echo $iduser; ?>'" style="background-color: green; font-weight: bolder; color: white; width: 100%; border:none; border-radius: 5px; height: 60px;">Edit Profil</button>

      </div>


    </div>





  <br> <br> <br> <br> <br> <br> <br>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>