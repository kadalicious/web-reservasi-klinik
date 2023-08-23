<?php 

include "server/koneksi.php";
session_start();

if(!isset($_SESSION["username"])){
  header("location:login.php");
}


$getiduser = $_GET['iduser'];

$usernamesession = $_SESSION['username'];
$datauser = "SELECT * FROM user WHERE id_user = '$getiduser'";
$connectdatauser = mysqli_query($koneksi, $datauser);
while($takeuser = mysqli_fetch_array($connectdatauser)){
  $namalengkap = $takeuser['namalengkap'];
  $nohp = $takeuser['nohp'];
  $jeniskelamin = $takeuser['jeniskelamin'];
  $alamat = $takeuser['alamat'];
  $pekerjaan = $takeuser['pekerjaan'];
  $agama = $takeuser['agama'];
}


if(isset($_POST['submit'])){
	$namalengkap2 = $_POST['namalengkap'];
	$nohp2 = $_POST['nohp'];
	$jeniskelamin2 = $_POST['jeniskelamin'];
	$alamat2 = $_POST['alamat'];
	$pekerjaan2 = $_POST['pekerjaan'];
	$agama2 = $_POST['agama'];

	//update
	$updateprofil = "UPDATE user set namalengkap = '$namalengkap2', nohp = '$nohp2', jeniskelamin = '$jeniskelamin2', alamat = '$alamat2', pekerjaan = '$pekerjaan2', agama = '$agama2' WHERE id_user = '$getiduser'";

	$connectupdateprofil = mysqli_query($koneksi, $updateprofil);

	if($connectupdateprofil){
		header("location:profil.php");
	}else{
		?>	
		<script type="text/javascript">
			alert("gagal melakukan perubahan profil");
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

    <title>Reservasi</title>
  </head>
  <body>


    <!-- open bread -->
    <div style="display: flex; margin-top: 10px; margin-left: 10px;">
      <p style="font-weight: bolder; background-color: #E6E6FA; padding: 10px; border-radius: 5px;">Home / Profil / Edit Profil User</p>
    </div>
    <!-- close bread -->
    



    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">Profil User</h1>
    </div>
   


    <div style="display: flex; justify-content: center; margin-top: 50px; flex-direction: column;">


      <div style="margin-left: 100px; margin-right: 100px;">
        
      <form method="POST" action="">
      
      <!-- nama lengkap input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nama lengkap</label>
        <input type="text" name="namalengkap" value="<?php echo $namalengkap; ?>" id="form4Example1" class="form-control"/>
      </div>

      <!-- nomor telepon -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nomor Telepon</label>
        <input type="text" name="nohp" value="<?php echo $nohp; ?>" id="form4Example1" class="form-control"/>
      </div>


      <!-- jenis kelamin -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Jenis Kelamin</label>
        <input type="text" name="jeniskelamin" value="<?php echo $jeniskelamin; ?>" id="form4Example1" class="form-control"/>
      </div>

      <!-- alamat -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Alamat</label>
        <input type="text" name="alamat" value="<?php echo $alamat; ?>" id="form4Example1" class="form-control"/>
      </div>

      <!-- pekerjaan -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Pekerjaan</label>
        <input type="text" name="pekerjaan" value="<?php echo $alamat; ?>" id="form4Example1" class="form-control"/>
      </div>

      <!-- agama -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Agama</label>
        <input type="text" name="agama" value="<?php echo $agama; ?>" id="form4Example1" class="form-control"/>
      </div>


      <!-- edit button -->
      <input type="submit" name="submit" value="Simpan Perubahan" style="background-color: green; font-weight: bolder; color: white; width: 100%; border:none; border-radius: 5px; height: 60px;"/>

      </div>

      </form>

    </div>





  <br> <br> <br> <br> <br> <br> <br>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>