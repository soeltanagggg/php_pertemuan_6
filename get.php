<?php
    $Provinsi = $_POST['Provinsi'];
    $Kabkot = $_POST['Kabkot'];
    $Kecamatan = $_POST['Kecamatan'];
    $Deskel = $_POST['Deskel'];
    $Najal = $_POST['Najal'];
    $tombol = $_POST['tombol'];
    ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <img src="download.jpeg" height="50px">
            <span class="fs-4">Perikanan dan Kelautan</span>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="indek_form_perikanan_kelautan.html" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Visi</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Misi</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Form Laporan Perikanan</a></li>
          </ul>
        </header>
    </div>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Terimakasih Sudah Berpartisipasi</h1>
        <p class="lead text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus nesciunt, sequi, omnis aspernatur dolore repellendus distinctio possimus iure odit soluta magni molestias, laborum voluptas culpa dolorem quam facilis ex earum.</p>
        <ul class="list-group">
          <li class="list-group-item"><?php echo "<span>Nama Provinsi:<span> ".$Provinsi."<br>";?></li>
          <li class="list-group-item"><?php echo "<span>Nama Kabupaten/Kota:<span> ". $Kabkot."<br>";?></li>
          <li class="list-group-item"><?php echo "<span>Nama Kabupaten/Kota:<span> ". $Kecamatan."<br>";?></li>
          <li class="list-group-item"><?php echo "<span>Desa/Kelurahan:<span> ". $Deskel."<br>";?></li>
          <li class="list-group-item"><?php echo "<span>Nama Jalanan:<span> ". $Najal."<br>";?></li>
        </ul>
      </div>
    </div>
  </section>

  <div class="container">
        <hr>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top-10">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2021 KKP, Ghaffar</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </footer>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
