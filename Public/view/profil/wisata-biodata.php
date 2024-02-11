<?php 
session_start();
require_once '../../../Controller/ProfilController.php';

if(!isset($_SESSION['login'])) {
  header("Location: ../login/login.php");
  exit;
} else {
  $user = false;
  if(intval($_GET['id']) === $_SESSION['id']){
    $user = true;
  } else {
    $user = false;    
  }
  $dataUser = ambilBiodata($_GET['id']);
  // var_dump($dataUser);
  if($dataUser === false) {
    header("Location: ../beranda/beranda.php");
    exit;
  }
}

// var_dump($dataUser['alamat_gambar']);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/profil.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Profil - Travelnesia</title>
</head>

<body>
  <div class="container">

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="gambar-logo" src="../../assets/logo-hitam.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars" style="color: white;"></i> <!-- Menggunakan ikon bars dari Font Awesome -->
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link" href="../beranda/beranda.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-provinsi-wisata.php">Wisata</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-postingan.php" >Postingan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-pemandu.php" >Pemandu</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-wisatawan.php" >Wisatawan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../profil/wisata-biodata.php?id=<?php echo $_SESSION['id']?>">Profil</a>
                  </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="bg-image">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">

        <div class="bungkus-kiri">
          <div class="profil"
            
            style="background-image: 
            <?php if (!isset($dataUser['alamat_gambar']) || $dataUser['alamat_gambar'] === NULL) : ?>
              url('../../assets/profil/noprofil.jfif'); 
            <?php else : ?>
              url('<?php echo $dataUser['alamat_gambar']?>'); 
            <?php endif; ?>
            
            max-width: 100px; height: 100px; ">

          </div>
          <div class="nama-user text-center">
          <?php if (!isset($dataUser['nama']) || $dataUser['nama'] === NULL) : ?>
              <h4 style="color: gray;">-</h4>
          <?php else : ?>
              <h4><?php echo $dataUser['nama']?></h4>
          <?php endif; ?>
          

            <p><?php echo $dataUser['nama_peran']?></p>
          </div>
          <div class="bungkus-icon">
            <div class="icon">
              <img src="../../assets/profil/icon-mata.png" alt="">
              <p><?php echo $dataUser['melihat']?> Melihat</p>
            </div>
            <div class="icon">
            <?php if ($dataUser['nama_peran'] === 'wisatawan') : ?>
              <img style="width: 43px;" src="../../assets/wisata/suka.png" alt="">
              <p><?php echo $dataUser['menyukai']?> Menyukai</p>
            <?php else : ?>
              <img src="../../assets/profil/icon-bintang.png" alt="">
              <?php if (!isset($dataUser['rating']) || $dataUser['rating'] === NULL) : ?>
                <p style="color: gray;">-</p>
              <?php else : ?>
                <p><?php echo $dataUser['rating']?> Rating</p>
              <?php endif; ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="edit-profil text-center mt-4">
            <?php if ($user === true) : ?>
              <a href="edit-profil.php">Edit Profil</a>
              <?php endif; ?>
          </div>
          <div class="bungkus-bio-kiri mt-4">
            <div class="isi">
              <h5>Umur</h5>
              <?php if (!isset($dataUser['umur']) || $dataUser['umur'] === NULL) : ?>
                <p style="color: gray;">-</p>
              <?php else : ?>
                <p><?php echo $dataUser['umur']?> tahun</p>
              <?php endif; ?>
            </div>
            <div class="isi">
              <img src="../../assets/profil/icon-age.png" alt="">
            </div>
          </div>
          <div class="bungkus-bio-kiri">
            <div class="isi">
              <h5>Email</h5>
              <p><?php echo $dataUser['email']?></p>
            </div>
            <div class="isi">
              <img src="../../assets/profil/icon-email.png" alt="">
            </div>
          </div>
          <div class="bungkus-bio-kiri">
            <div class="isi">
              <h5>Jenis kelamin</h5>
              <?php if (!isset($dataUser['biodata']) || $dataUser['biodata'] === NULL) : ?>
                <p style="color: gray;">-</p>
              <?php else : ?>
                  <p><?php echo $dataUser['biodata']?></p>
              <?php endif; ?>
            </div>
            <div class="isi">
              <img src="../../assets/profil/icon-jk.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="bungkus-kanan">
          <div class="navbar-kanan">
            <a href="" class="aktif">Biodata</a>
            <a href="wisata-postingan.php?id=<?php echo $_SESSION['id']?>">Postingan Wisata</a>
            <?php if($dataUser['nama_peran'] === 'wisatawan') :?>
              <a href="">Rekomendasikan Wisata</a>
            <?php else : ?>>
              <a href="">wisata yang dipandu</a>
            <?php endif; ?>
          </div>
          <div class="isi-dalam">
            <h5>Deskripsi</h5>
              <?php if (!isset($dataUser['nama']) || $dataUser['nama'] === NULL) : ?>
                <p style="color: gray;">-</p>
              <?php else : ?>
                  <p><?php echo $dataUser['jenis_kelamin']?></p>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>