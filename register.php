<?php 

include "server/koneksi.php";
include_once "winteresso/winteresso.php";

if(isset($_POST['submit'])){
  $namalengkap = $_POST['namalengkap'];
  $username = $_POST['username'];
  $password = sha1($_POST['password']);
  $nohp = $_POST['nohp'];
  $jeniskelamin = $_POST['jeniskelamin'];

  $sqlregister = "INSERT INTO user set namalengkap = '$namalengkap', username = '$username', password = '$password', nohp = '$nohp', jeniskelamin = '$jeniskelamin'";

  $connectregister = mysqli_query($koneksi, $sqlregister);

  if($connectregister){
    header("location:login.php");
  }else{
    WIN_DIALOG("Gagal melakukan pendaftaran");
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

    <title>Daftar</title>
  </head>
  <body>
  

    <div style="display: flex; justify-content: center;margin-top: 50px;">
      <h1 style="font-weight: bolder;">REGISTER</h1>
    </div>


    <div style="display: flex; justify-content: center;margin-left: 50px; margin-right: 50px; margin-top: 100px;">


    <form method="POST" action="">
      <!-- nama lengkap input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Nama lengkap</label>
        <input type="text" name="namalengkap" id="form2Example1" class="form-control" autofocus required/>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Username</label>
        <input type="text" name="username" id="form2Example1" class="form-control" required/>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input type="password" name="password" id="form2Example2" class="form-control" required/>
      </div>

      <!-- No telepon input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">No telepon</label>
        <input type="text" name="nohp" id="form2Example2" class="form-control" required/>
      </div>

      <!-- jenis kelamin input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Jenis kelamin</label>
        <select name="jeniskelamin">
          <option value="pria">Pria</option>
          <option value="wanita">Wanita</option>
        </select>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
      

    
      </div>


      <!-- Submit button -->
      <input type="submit" name="submit" value="Daftar" class="btn btn-primary" style="width: 100%; "/>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Sudah memiliki akun? <a href="login.php" style="text-decoration: none;">Masuk</a></p>
      </div>
    </form>


    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>