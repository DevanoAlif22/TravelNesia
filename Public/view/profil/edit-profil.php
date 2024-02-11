<?php 
session_start();
require_once '../../../Controller/ProfilController.php';

if(!isset($_SESSION['login'])) {
  header("Location: ../login/login.php");
  exit;
} else {
  $user = false;
  if($_SESSION['id']){
    $user = true;
  } else {
    header("Location: ../beranda/beranda.php");
    exit;   
  }
  $dataUser = ambilBiodata($_SESSION['id']);
  if($dataUser === false) {
    header("Location: ../beranda/beranda.php");
    exit;
  }
}

if(isset($_POST['edit'])) {
    $editProfil = uploadProfil($_SESSION['id'], $_POST);
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

    <title>Edit Profil - Travelnesia</title>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <?php if($dataUser !== false) : ?>
                    <div class="bungkus-kanan">
                        <div class="navbar-kanan">
                            <h5><b>Edit Profil</b></h5>
                        </div>
                        <div class="isi-dalam">
                            <a href=""><img src="../../assets/profil/left.png" style="margin-top: -1rem;" width="30"
                                    alt=""></a>
                            <div class="row">
                                <div class="col-lg-5 mb-3">
                                    <div class="bungkus-kiri-up">
                                        <div class="gambar-up">
                                            <div class="profil mt-4"
                                            style="
                                                <?php if(isset($dataUser['nama']) && $dataUser['nama'] !== null) : ?>
                                                    background-image: url(<?php echo $dataUser['alamat_gambar'] ?>); 
                                                <?php else : ?>
                                                    background-image: url(../../assets/profil/noprofil.jfif); 
                                                <?php endif; ?>
                                                
                                                max-width: 80px; height: 80px; ">
    
                                            </div>
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <h5 class="mb-3 required" style="font-weight: 600;"> Nama <span
                                            style="color:red;">*</span> </h5>
                                    <div class="input-kanan"> 
                                        <?php if(isset($dataUser['nama']) && $dataUser['nama'] !== null) : ?>
                                        <input type="text" name="nama" value="<?php echo $dataUser['nama'] ?>">
                                        <?php else : ?>
                                            <input type="text" name="nama">
                                        <?php endif; ?>
                                    </div>
                                    <h5 class="mb-3 mt-4" style="font-weight: 600;">Umur <span style="color:red;">*</span>
                                    </h5>
                                    <div class="input-kanan">
                                        <?php if(isset($dataUser['umur']) && $dataUser['umur'] !== null) : ?>
                                        <input type="text" name="umur" value="<?php echo $dataUser['umur'] ?>">
                                        <?php else : ?>
                                            <input type="number" min="1" name="umur">
                                        <?php endif; ?>
                                    </div>
                                    <h5 class="mb-3 mt-4" style="font-weight: 600;">Jenis kelamin <span
                                            style="color:red;">*</span>
                                    </h5>
                                    <div class="input-jk d-flex">
                                        <div class="jk-1">
                                            <input type="radio" value="Laki-laki" name="jenis_kelamin"><span class="ms-2">Laki-Laki</span>
                                        </div>
    
                                        <div class="jk-1">
                                            <input type="radio" value="Perempuan" name="jenis_kelamin"><span class="ms-2">Perempuan</span>
                                        </div>
    
                                    </div>
    
                                    <div class="tombol mt-4" style="text-align: right;">
    
                                        <button type="submit" name="edit"
                                            style="padding: 0.5rem 2.5rem;font: weight bold; background-color:#006FD6;color:white;border:none;border-radius:30px;"><b>Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>

                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>