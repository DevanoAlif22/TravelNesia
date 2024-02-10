<?php 


require '../../../Controller/ProvinsiController.php';
$json_data = file_get_contents('../../../Json/semua-provinsi/semua-provinsi.json');
$data = json_decode($json_data, true);

if(isset($_POST['cari-provinsi'])) {
  $isi = $_POST['isi-pencarian'];
  if($isi != '') {
    $data = PencarianProvinsi($isi, $data);
  }
} 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian wisata - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/pencarian.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <style>
    input:focus {
        outline: none;
    }
  </style>
  <body>
    
    <div class="container">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="gambar-logo" src="../../assets/logo-hitam.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Wisata</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Postingan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Pemandu</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Masuk</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
    </div>

    <div class="container">
      <div class="d-flex flex-row-reverse">
        <form action="" method="post">
          <div class="p-2 me-5 cari d-flex">
            <i class="fa-solid fa-magnifying-glass" style="margin-top:7px; margin-right:20px;color: #999999;"></i>  
            <input autocomplete="off" name="isi-pencarian" type="text" placeholder="Cari Provinsi">
            <button name="cari-provinsi" type="submit" style="border:none; background-color: #006FD6; padding: 5px 25px; color: white; border-radius: 25px;">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <div class="container mt-5">
        <div class="mb-5"></div>
        <div class="d-flex justify-content-center">
          <h4 class="text-center pilih-provinsi"><b>Pilih Provinsi</b></h4>
        </div>

        <div class="container mt-5">
            <div class="row container-provinsi">
                  <?php foreach ($data as $result) : ?>
                    <div class="col-lg-3 card-provinsi">
                      <div class="isi-provinsi">
                        <div style="width:100%; display:flex; justify-content:center;">
                          <img style="width:90px; " src="../../assets/provinsi/<?php echo $result['gambar'] ?>" alt="">
                        </div>
                        <h6 class="pt-3 pb-3 text-center"><b><?php echo $result['nama'] ?></b></h6>
                        <a href="pencarian-wisata.php?id=<?php echo $result['id'] ?>" class="lihat-wisata text-center">Pilih Provinsi</a>
                      </div>
                    </div>
                  <?php endforeach ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>