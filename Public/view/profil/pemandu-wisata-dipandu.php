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
                        style="background-image: url(../../assets/profil/profil.jpg); max-width: 100px; height: 100px; ">

                    </div>
                    <div class="nama-user text-center">
                        <h4>Davano alif</h4>
                        <p>Pemandu Wisata</p>
                    </div>
                    <div class="bungkus-icon">
                        <div class="icon">
                            <img src="../../assets/profil/icon-mata.png" alt="">
                            <p>200 Viewers</p>
                        </div>
                        <div class="icon">
                            <img src="../../assets/profil/icon-bintang.png" alt="">
                            <p>3.6 Ratings</p>
                        </div>
                    </div>
                    <div class="edit-profil text-center mt-4">
                        <a href="">Edit Profile</a>
                    </div>
                    <div class="bungkus-bio-kiri mt-4">
                        <div class="isi">
                            <h5>Umur</h5>
                            <p>20 tahun</p>
                        </div>
                        <div class="isi">
                            <img src="../../assets/profil/icon-age.png" alt="">
                        </div>
                    </div>
                    <div class="bungkus-bio-kiri">
                        <div class="isi">
                            <h5>Email</h5>
                            <p>Yustinamalia22@gmail.com</p>
                        </div>
                        <div class="isi">
                            <img src="../../assets/profil/icon-email.png" alt="">
                        </div>
                    </div>
                    <div class="bungkus-bio-kiri">
                        <div class="isi">
                            <h5>Jenis kelamin</h5>
                            <p>Laki laki</p>
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
                        <a href="">Biodata</a>
                        <a href="">Pengalaman</a>
                        <a href="" class="aktif">wisata yang dipandu</a>
                    </div>
                    <div class="isi-dalam">
                        <div class="row">
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-wisata col-lg-4">
                                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');"
                                    class="header-wisata d-flex flex-dirextion-column">
                                    <div class="align-self-end"
                                        style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                                        <div class="ms-3"
                                            style="width:100px; background-color:white; height: 3px; margin-bottom:10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-wisata p-2">
                                    <div class="d-flex" style="align-items: center; margin-top: -0.5rem;">
                                        <img style="width:15px; height:25px; margin-right:5px;"
                                            src="../../assets/wisata/map.png" alt="">
                                        <p class="ms-1 alamat">Borobudur, Magelang, Jawa Tengah,
                                            Indonesia.</p>
                                    </div>
                                    <div class="d-flex mb-2" style="align-items: center;margin-top: -1rem;">
                                        <img style="width:20px; height:20px;" src="../../assets/wisata/uang.png" alt="">
                                        <p class="ms-2 harga"><b>Rp. 300.000</b></p>
                                    </div>
                                    <div style="margin-left:0px; margin-top: -2rem; ">
                                        <div class="d-flex">
                                            <div class="d-flex" style="width:100%; align-items: center ">
                                                <img style="width:20px; height:20px" src="../../assets/beranda/star.png"
                                                    alt="">
                                                <p class="ms-1 ret">4.4 Rating</p>
                                            </div>
                                            <div class="d-flex" style="width:100%; ">
                                                <p class="ms-2 ret">250 Reviews</p>
                                            </div>
                                        </div>
                                        <a href="" style="font-size: 10px;" class="lihat-wisata">Lihat Tawaran</a>
                                    </div>
                                </div>
                            </div>

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