 <!-- open navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #0099ff; position: fixed; z-index: 9999;top: 0; left: 0;right: 0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="text-decoration: none; font-weight: bolder;">
        <img src="img/logokliniknadya.jpg" style="width: 90px; height: 90px; border-radius: 5px; margin: 5px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php" style="font-weight: bolder; color: white; padding: 5px; border-radius: 5px; margin: 5px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white';" onmouseout="this.style.color='white';this.style.backgroundColor='#0099ff';">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="about.php" style="font-weight: bolder; color: white; padding: 5px; border-radius: 5px; margin: 5px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white'" onmouseout="this.style.color='white'; this.style.backgroundColor='#0099ff';">Tentang Kami</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="lokasipraktek.php" style="font-weight: bolder; color: white; padding: 5px; border-radius: 5px; margin: 5px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white';" onmouseout="this.style.color='white';this.style.backgroundColor='#0099ff';">Lokasi Praktek</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="jadwalreservasi.php?username=<?php echo $usernamesession; ?>" style="font-weight: bolder; color: white; padding: 5px; border-radius: 5px; margin: 5px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white';" onmouseout="this.style.color='white';this.style.backgroundColor='#0099ff';">Jadwal reservasimu</a>
          </li>

        </ul>


        <!-- open login dan register -->
        <div style="display: flex; flex-direction: row;">

         <a id="masuk" href="profil.php" style="text-decoration: none; color: white; font-weight: bolder; background-color: #0099ff; transition: background-color 0.3s; border-radius: 5px; padding: 10px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white';" onmouseout="this.style.color='white'; this.style.backgroundColor='#0099ff';"><?php echo $usernamesession; ?></a>

          <a href="" style="text-decoration: none; color: black; font-weight: bolder; margin-left: 10px; margin-right: 10px; padding: 10px;">/</a>

          <a id="masuk" href="logout.php" style="text-decoration: none; color: white; font-weight: bolder; background-color: red; transition: background-color 0.3s; border-radius: 5px; padding: 10px;" onmouseover="this.style.color='#0099ff'; this.style.backgroundColor='white';" onmouseout="this.style.color='white'; this.style.backgroundColor='red';">Logout</a>

        </div>
        <!-- close login dan register -->



      </div>
    </div>
  </nav>
  <!-- close navbar -->








  <!-- open wave -->
  <div style="margin-top: -150px; position: fixed; z-index: 9998; left: 0; right: 0;">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.6));"><path fill="#0099ff" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,234.7C384,224,480,192,576,181.3C672,171,768,181,864,197.3C960,213,1056,235,1152,245.3C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

</svg>

  </div>
  <!-- close wave -->








  <!-- open carousel slide -->
  <main style="display: flex; justify-content: center; flex-direction: column; height: 400px; background-color: white; margin-top: 120px;">
    <h1 style="text-align: center;">Reservasi online gratis dan mudah</h1>
    <h1 style="text-align: center; color: #FFD700;">Lidya Dental Care</h1>
    <p class="lead" style="margin-left: 20px; margin-right: 20px; text-align: center;">Klinik gigi Lidya menyediakan layanan reservasi online untuk memudahkan penjadwalan pasien yang ingin melakukan pemeriksaan ke klinik. Dengan menggunakan reservasi secara online dapat menghemat waktu dan tenaga.</p>
    <p class="lead" style="display: flex; justify-content: center;">
      <a href="reservasi.php" class="btn btn-lg btn-secondary fw-bold border-white" style="background-color: #0099ff; color: white;" onmouseover="this.style.color='yellow';" onmouseout="this.style.color='white';">RESERVASI DISINI</a>
    </p>
  </main>
  <!-- close carousel slide -->