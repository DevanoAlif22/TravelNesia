<?php 
session_start();
require_once '../../../Controller/ProfilController.php';
require_once '../../../Controller/ProvinsiController.php';

$json_data = file_get_contents('../../../Json/semua-provinsi/semua-provinsi.json');
$data = json_decode($json_data, true);

if($_GET['id']) {
    $id = $_GET['id'];
    $data = GetId($id, $data);
    $nama = $data[0]['nama'];
    if($data == null) {
        header("Location: pencarian-provinsi-wisata.php");
    }
    $json_wisata = file_get_contents('../../../Json/' . $data[1]);
    $wisata = json_decode($json_wisata, true);
} else {
    header("Location: wisata-postingan-provinsi.php");
    exit; 
}


if(!isset($_SESSION['login'])) {
    header("Location: ../login/login.php");
    exit;
  } else {
    $user = false;
    if($_SESSION['id']){
      $user = true;
    } else {
      $user = false;    
    }
    $dataUser = ambilBiodata($_SESSION['id']);
    if($dataUser === false) {
      header("Location: ../beranda/beranda.php");
      exit;
    }
  }

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

    <title>Profil Postingan - Travelnesia</title>
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
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Postingan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Pemandu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Masuk</a>
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
                    <?php if (!isset($dataUser['gambar']) || $dataUser['gambar'] === NULL) : ?>
                    url('../../assets/profil/noprofil.jfif'); 
                    <?php else : ?>
                    url('<?php echo $dataUser['gambar']?>'); 
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
                    <?php if ($dataUser['nama_peran'] === 'Wisatawan') : ?>
                    <img style="width: 43px;" src="../../assets/wisata/suka.png" alt="">
                    <p><?php echo $dataUser['menyukai']?> Menyukai</p>
                    <?php else : ?>
                    <img src="../../assets/profil/icon-bintang.png" alt="">
                    <?php if (!isset($dataUser['rating']) || $dataUser['rating'] === NULL) : ?>
                        <p>0 Rating</p>
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
                    <?php if (!isset($dataUser['jenis_kelamin']) || $dataUser['jenis_kelamin'] === NULL) : ?>
                        <p style="color: gray;">-</p>
                    <?php else : ?>
                        <p><?php echo $dataUser['jenis_kelamin']?></p>
                    <?php endif; ?>
                    </div>
                    <div class="isi">
                    <img src="../../assets/profil/icon-jk.png" alt="">
                    </div>
                </div>
                <div class="mt-4 edit-profil text-center">
                  <?php if ($user === true) : ?>
                  <a style="background-color:red;" href="../lainnya/keluar.php">Keluar</a>
                  <?php endif; ?>
                </div>
                </div>
            </div>
            <div class="col-lg-8 scrol-isi">
                <div class="bungkus-kanan">
                    <div class="navbar-kanan">
                        <h5><b>Pilih Wisata di <?php echo $nama ?></b></h5>
                    </div>
                    <div class="isi-dalam d-flex">
                        <div class="row d-flex container-wisata">
                            <?php foreach ($wisata as $result) : ?>
                                <div class="card-wisata col-lg-3" style="width:300px !important;">
                                    <div style="background-image: url('<?php echo $result['image']?>');" class="header-wisata d-flex flex-dirextion-column">
                                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                            <h5 class="ms-3 mb-3" style="color:white;"><?php echo $result['name'] ?></h5>
                                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                                        </div>
                                    </div>
                                    <div class="bottom-wisata p-3">
                                        <div class="d-flex" style="width:100%;">
                                            <img class="mt-3" style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                                            <p class="ms-3" style="width:90%;"><?php echo substr($result['address'], 0, 35);?> ...</p>
                                        </div>
                                        <div>
                                            <div class="d-flex mb-3">
                                                <div class="d-flex" style="width:100%;">
                                                    <img class="mt-2" style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                                    <p class="ms-2"><?php echo $result['rating'] ?> Rating</p>
                                                </div>
                                                <div class="d-flex" style="width:100%;">
                                                    <p class="ms-2"><?php echo $result['reviews'] ?> Reviews</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <a href="wisata-postingan-upload.php?id=<?php echo $id?>&place_id=<?php echo $result['place_id'] ?>" class="lihat-wisata">Pilih Wisata</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
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