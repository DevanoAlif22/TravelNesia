<?php 
session_start();
require_once '../../../Controller/ProfilController.php';
require_once '../../../Controller/PostinganController.php';

if(isset($_POST['hapus'])) {
    $hapusPostingan = hapusPostingan($_POST);
    if($hapusPostingan === 'berhasil') {
        $_SESSION['notifikasiBerhasil'] = 'true'; 
    } else {
        $_SESSION['notifikasiBerhasil'] = 'false'; 
    }
    header("Location: wisata-postingan.php?id=" . $_SESSION['id']);
    exit;
}

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
    if($dataUser === false) {
      header("Location: ../beranda/beranda.php");
      exit;
    }
    $dataPostingan = ambilPostingan($_GET['id']);
  }

  $notifikasiBerhasil = isset($_SESSION['notifikasiBerhasil']) ? $_SESSION['notifikasiBerhasil'] : null;
  unset($_SESSION['notifikasiBerhasil']);
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
                        <a href="wisata-biodata.php?id=<?php echo  $_GET['id'] ?>" >Biodata</a>
                        <a class="aktif" href="wisata-postingan.php?id=<?php echo $_GET['id']?>">Postingan Wisata</a>
                        <?php if($dataUser['nama_peran'] === 'Wisatawan') :?>
                        <a href="">Rekomendasikan Wisata</a>
                        <?php else : ?>
                        <a href="pemandu-wisata-dipandu.php?id=<?php echo $_GET['id']?>">wisata yang dipandu</a>
                        <?php endif; ?>
                    </div>
                    <div class="isi-dalam">
                        <?php if(isset( $notifikasiBerhasil) &&  $notifikasiBerhasil === 'false') : ?>
                            <div class="alert alert-danger" role="alert">
                                Postingan gagal di hapus!
                            </div>
                        <?php elseif(isset( $notifikasiBerhasil) &&  $notifikasiBerhasil === 'true'):?>
                            <div class="alert alert-success" role="alert">
                                Postingan berhasil di hapus!
                            </div>
                        <?php endif;?>

                        <div class="row">
                            
                            <div class="edit-profil text-end mb-3">
                                <?php if ($user === true) : ?>
                                <a class="" href="wisata-postingan-provinsi.php">Tambah Postingan</a>
                                <?php endif; ?>
                            </div>

                            <?php if($dataPostingan !== false) : ?>
                                <?php foreach ($dataPostingan as $data) : ?>
                                    <div class="col-lg-6 card-postingan d-flex">
                                        <div class="postingan-kiri" style="background-image: url('<?php echo $data['gambar']?>');"></div>
                                        <div class="postingan-kanan">
                                            <h6 class="mt-3" style="padding:0px; font-weight:bold;"><?php echo $data['judul']?>...</h6>
                                            <p style="font-size: 0.9rem; padding:0px;margin:0px;"><?php echo substr($data['nama_wisata'], 0, 100);?></p>
                                            <p style="text-align:justify;  font-size:0.6rem;"><?php echo substr($data['konten'], 0, 100);?>....</p>
                                            <div class="d-flex">
                                                <div class="d-flex me-3">
                                                    <img style="width:25px;height:25px;" src="../../assets/beranda/suka2.png"
                                                        alt="">
                                                    <h6 style="font-size: 13px;" class="mt-1 ms-1"><?php echo $data['menyukai']?></h6>
                                                </div>
                                                <div class="d-flex">
                                                    <img style="width: 25px;height:25px;" src="../../assets/beranda/melihat.png"
                                                        alt="">
                                                    <h6 style="font-size: 13px;" class="mt-1 ms-1"><?php echo $data['melihat']?></h6>
                                                </div>
                                            </div>
                                            <div class="garis"
                                                style="width:60%; margin-top:5px; background-color:black; height:2px; margin-bottom : 10px">
                                            </div>
                                            <a href="../detail/postingan.php?id=<?php echo $data['id_ini']?>" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                                            <?php if($user === true) :?>
                                            <div class="d-flex">
                                                <form action="" method="post" class="me-2">
                                                    <input type="hidden" value="<?php echo $data['id_ini']?>" name="id_postingan">
                                                    <p style="padding-top:4px;"><button name="hapus" type="submit" style="margin-top:30px; padding: 5px 20px; background-color:red; margin:0px; border:none; font-weight:bold; font-size: 0.7rem;" href="?hapus=<?php echo $data['id_ini']?>&id=<?php echo $_SESSION['id']?>" style="margin-left:0px;" class="lihat-wisata">Hapus</button></p>
                                                </form>
                                                <p class="mt-4" ><a style="background-color:green; margin:0px; border:none; font-weight:bold;" href="wisata-postingan-update.php?update=<?php echo $data['id_ini']?>&id=<?php echo $_SESSION['id']?>" style="margin-left:0px;" class="lihat-wisata">Update</a></p>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php else : ?>
                                <p class="pt-3">Bagi pengalaman menarik dari wisata di website kami dan posting ke semua orang!</p>
                            <?php endif; ?>

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