<?php 
session_start();
require_once '../../../Controller/WisataController.php';

if(!isset($_SESSION['login'])) {
  header("Location: ../login/login.php");
  exit;
} else {
  $user = false;
  if($_GET['id']){
    // cek apakah postingan ada
    $cekWisata = cekWisata(intval($_GET['id']));
    if($cekWisata === false) {
        header("Location: ../beranda/beranda.php");
        exit;
    }
    $cekUser = cekWisataUser(intval($_GET['id']));
    if($cekUser === true) {
        $user = true;
    } else {
        $user = false;    
    }

    $dataPemirsa = dataPemirsa($_SESSION['id'], $cekWisata['id_ini']);
    $profilPengguna = $dataPemirsa[1]['gambar'];
    $dataKomentar = dataKomentar($cekWisata['id_ini']);
}
}

if(isset($_POST['tambahKomentar'])) {
    $id_wisata = intval($_GET['id']);
    $tambahKomentar = tambahKomentar($id_wisata, $_POST);
    if($tambahKomentar === 'berhasil') {
        $_SESSION['notifikasiBerhasil'] = 'berhasil'; 
    } else {
        $_SESSION['notifikasiBerhasil'] = 'gagal'; 
    } 
    header("Location: postingan.php?id=" . $_GET['id']);
    exit;
}

$notifikasiBerhasil = isset($_SESSION['notifikasiBerhasil']) ? $_SESSION['notifikasiBerhasil'] : null;
unset($_SESSION['notifikasiBerhasil']);

if(isset($_POST['menyukai'])) {
    $id_wisata = intval($_GET['id']);
    $menyukai = menyukaiPostingan($id_wisata,$_POST);
    header("Location: postingan.php?id=" . $_GET['id']);
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian wisata - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/wisata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 </head>
  <body>
    
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Jasa Pemandu Wisata ini</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" auto-complate="none">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea auto-complate="none" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Bukti Gambar</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Laporkan</button>
        </div>
        </div>
    </div>
    </div>

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

    <div class="hero-image" style="background-image: url('../../assets/wisata/hero.png')"></div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                    <div class="ms-3 mt-1">
                        <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                        <p style="margin-top:-9px; font-size:0.8rem;">Pemandu Wisata Ini</p>
                    </div>
                    
                </div>
                <div class="d-flex me-4 mb-3">
                    <img style="width:23px" src="../../assets/wisata/rating.png" alt="">
                    <b class="ms-2">4.5 Rating Pemandu wisata</b>
                </div>
                <h2 class="mb-3"><b>Candi Borobudur Indonesia</b></h2>
                <p>22 - november - 2023</p>
                <div class="d-flex">
                    <div class="kategori">
                        <b>Alam</b>
                    </div>
                    <div class="kategori">
                        <b>Tujuan Wisata</b>
                    </div>
                    <div class="kategori">
                        <b>Candi</b>
                    </div>
                </div>
        
                <div class="mt-4 mb-4">    
                    <div class="d-flex me-4 mb-3">
                        <img style="width:30px; height:30px;" src="../../assets/wisata/uang.png" alt="">
                        <h4 class="ms-2"><b >Rp 300.000</b></h4>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <img style="width:23px; height:32px;" src="../../assets/wisata/map.png" alt="">
                    <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                </div>
                
                <iframe
                    class="mb-5 map-google"
                    height="250"
                    style="border:0;"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.9863610662025!2d106.18373291525762!3d-1.902047338388655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e228d68bba10fcf%3A0x472261b174e46cae!2sPantai%20Tikus!5e0!3m2!1sid!2sid!4v1644255559154!5m2!1sid!2sid">
                </iframe>
            </div>
            
            <div class="col-lg-6">
                <div class="d-flex mb-4 pesan-button me-4">
                    <div class="kategori">
                        <a  style="color:white; text-decoration:none; " href=""><b style=";">Hubungi</b></a>
                    </div>
                    <div class="kategori" style="background-color:green;">
                        <a  style="color:white; text-decoration:none; " href=""><b style="background-color:green;">Pesan</b></a>
                    </div>
                    <div class="kategori" data-bs-toggle="modal" data-bs-target="#exampleModal" style=" background-color:red; cursor:pointer;">
                        <div  style="color:white; text-decoration:none; " href=""><b style=";">Laporkan</b></div>
                    </div>
                </div>
                <div class="d-flex mb-4 pesan-button me-5">
                    <div class="d-flex me-4">
                       <a href=""><img style="width:50px" src="../../assets/wisata/suka.png" alt=""></a>
                       <h5 class=" ms-3 me-3 mt-2"><b>200</b></h5>
                    </div>
                    <div class="d-flex">
                       <img style="width:50px" src="../../assets/wisata/komen.png">
                       <h5 class=" ms-3 me-3 mt-2"><b>200</b></h5>
                    </div>
                </div>
            </div>
        </div>

        <p class="pb-4" style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries</p>

        <div class="komentar mt-3 mb-3">
            <div class="isi-komentar d-flex row">
                <div class="profil col-lg-2" style="background-image: url('../../assets/beranda/profil.png'); width:70px; height: 70px;"></div>
                <div class="konten-komentar d-flex col-lg-8">
                    <input type="text" name="" id="">
                    <button class=" kirim-komentar">Kirim</button>
                </div>
            </div>
        </div>

        <div class="list-komentar mt-5 mb-3">
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:55px; height: 55px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>