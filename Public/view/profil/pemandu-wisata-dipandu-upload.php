<?php 
session_start();
error_reporting(E_ERROR | E_PARSE);
require_once '../../../Controller/ProfilController.php';
require_once '../../../Controller/ProvinsiController.php';
require_once '../../../Controller/WisataController.php';

// Baca isi file JSON
$json_data = file_get_contents('../../../Json/semua-provinsi/semua-provinsi.json');
$data = json_decode($json_data, true);

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


if($_GET['id'] & $_GET['place_id']) {
    $id = $_GET['id'];
    $place_id = $_GET['place_id'];

    $data = GetId($id, $data);
    if($data == null) {
        header("Location: pencarian-provinsi-wisata.php");
    }
    $json_wisata = file_get_contents('../../../Json/' . $data[1]);
    $wisata = json_decode($json_wisata, true);
    $data = PencarianDetailWisata( $place_id, $wisata);

    if($data == null) {
        header("Location: ../pencarian/pencarian-provinsi-wisata.php");
        exit; 
    }
} else {
    header("Location: ../pencarian/pencarian-provinsi-wisata.php");
    exit; 
}

if(isset($_POST['tambah'])) {
    $uploadPostingan = uploadPemanduWisata($_SESSION['id'], $_POST);
    if($uploadPostingan === 'berhasil') {
        $_SESSION['notifikasiBerhasil'] = 'berhasil'; 
    } else if($uploadPostingan === 'harga') {
        $_SESSION['notifikasiBerhasil'] = 'harga'; 
    } else if($uploadPostingan === 'ada') {
        $_SESSION['notifikasiBerhasil'] = 'ada'; 
    }
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

    <title>Profil</title>
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
            <div class="col-lg-8">
                <div class="bungkus-kanan">
                    <div class="navbar-kanan">
                        <h5>Upload Pemandu Wisata <b> <?php echo $data['name'] ?></b></h5>
                    </div>
                    <div class="isi-dalam">
                        <a href="pemandu-wisata-dipandu.php?id=<?php echo $_SESSION['id']?>"><img src="../../assets/profil/left.png" style="margin-top: -1rem;" width="30"
                                alt=""></a>
                                <?php if(isset( $notifikasiBerhasil) &&  $notifikasiBerhasil === 'harga') : ?>
                                        <div class="alert alert-danger" role="alert">
                                            Postingan Pemandu Wisata gagal di upload, pastikan harga lebih besar dari 0!
                                        </div>
                                    <?php elseif(isset( $notifikasiBerhasil) &&  $notifikasiBerhasil === 'berhasil'):?>
                                        <div class="alert alert-success" role="alert">
                                            Postingan pemandu wisata berhasil di upload!
                                        </div>
                                    <?php elseif(isset( $notifikasiBerhasil) &&  $notifikasiBerhasil === 'ada'):?>
                                        <div class="alert alert-danger" role="alert">
                                            Postingan Pemandu Wisata gagal di upload, anda pernah upload pemandu wisata ini
                                        </div>
                                    <?php endif;?>
                        
                            <form action="" method="post">
                                <input type="hidden" name="embed" value="<?php echo $data['embed'] ?>">
                                <input type="hidden" name="place_id" value="<?php echo $_GET['place_id'] ?>">
                                <input type="hidden" name="id_provinsi" value="<?php echo $_GET['id'] ?>">
                                <input type="hidden" name="nama_wisata" value="<?php echo $data['name'] ?>">
                                <input type="hidden" name="alamat_wisata" value="<?php echo $data['address'] ?>">
                                <input type="hidden" name="gambar_wisata" value="<?php echo $data['image'] ?>">
                                <h5 class="mb-3 mt-4" style="font-weight: 600;">Harga</h5>
                                <div class="input-kanan" style="width: 60%;">
                                    <input type="number" min="0" name="harga">
                                </div>
                                <h5 class="mb-3 mt-4">Deskripsi</h5>
                                <textarea name="deskripsi" id="" rows="10"
                                    style="border-radius:10px; padding: 0.5rem 1rem; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;width: 100%;"></textarea>
    
                                <div class="tombol mt-4" style="text-align: right;">
    
                                    <button type="submit" name="tambah"
                                        style="padding: 0.5rem 2.5rem;font: weight bold; background-color:#006FD6;color:white;border:none;border-radius:30px;"><b>Kirim</button>
                                </div>
                            </form>
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